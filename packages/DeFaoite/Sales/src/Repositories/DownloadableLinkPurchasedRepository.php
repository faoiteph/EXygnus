<?php

namespace DeFaoite\Sales\Repositories;

use Illuminate\Container\Container;
use Illuminate\Http\UploadedFile;
use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Product\Repositories\ProductDownloadableLinkRepository;
use DeFaoite\Sales\Contracts\OrderItem;

class DownloadableLinkPurchasedRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductDownloadableLinkRepository $productDownloadableLinkRepository,
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'DeFaoite\Sales\Contracts\DownloadableLinkPurchased';
    }

    /**
     * @param  OrderItem  $orderItem
     * @return void
     */
    public function saveLinks($orderItem)
    {
        if (! $this->isValidDownloadableProduct($orderItem)) {
            return;
        }

        $linkIds = $orderItem->type === 'virtual'
            ? $orderItem->product->downloadable_links->pluck('id')->all()
            : $orderItem->additional['links'];

        foreach ($linkIds as $linkId) {
            if (! $productDownloadableLink = $this->productDownloadableLinkRepository->find($linkId)) {
                continue;
            }

            $this->createLink([
                'name' => $productDownloadableLink->title,
                'product_name' => $orderItem->name,
                'url' => $productDownloadableLink->url,
                'file' => $productDownloadableLink->file,
                'file_name' => $productDownloadableLink->file_name,
                'type' => $productDownloadableLink->type,
                'download_bought' => $productDownloadableLink->downloads * $orderItem->qty_ordered,
                'status' => $orderItem->type === 'virtual' ? 'available' : null,
            ], $orderItem);
        }
    }

    /**
     * Create a protected downloadable entitlement delivered for one virtual order item.
     */
    public function deliver($orderItem, array $data): void
    {
        $attributes = [
            'name' => $data['title'],
            'product_name' => $orderItem->name,
            'type' => $data['type'],
            'download_bought' => 0,
            'status' => 'available',
        ];

        if ($data['type'] === 'file') {
            /** @var UploadedFile $file */
            $file = $data['file'];
            $attributes['file'] = $file->store(
                'product_downloadable_links/'.$orderItem->product_id.'/deliveries/'.$orderItem->id,
                'private'
            );
            $attributes['file_name'] = $file->getClientOriginalName();
        } else {
            $attributes['url'] = $data['url'];
        }

        $this->createLink($attributes, $orderItem);
    }

    /**
     * Persist an entitlement snapshot tied to its exact order item.
     */
    private function createLink(array $attributes, $orderItem = null): void
    {
        if ($orderItem) {
            $attributes = array_merge($attributes, [
                'status' => $attributes['status'] ?? ($orderItem->qty_invoiced > 0 ? 'available' : 'pending'),
                'customer_id' => $orderItem->order->customer_id,
                'order_id' => $orderItem->order_id,
                'order_item_id' => $orderItem->id,
            ]);
        }

        $this->create($attributes);
    }

    /**
     * Return true, if ordered item is valid downloadable product with links
     *
     * @param  OrderItem  $orderItem
     */
    private function isValidDownloadableProduct($orderItem): bool
    {
        if (
            (
                (stristr($orderItem->type, 'downloadable') !== false && isset($orderItem->additional['links']))
                || ($orderItem->type === 'virtual' && $orderItem->product?->downloadable_links->isNotEmpty())
            )
        ) {
            return true;
        }

        return false;
    }

    /**
     * @param  OrderItem  $orderItem
     * @param  string  $status
     * @return void
     */
    public function updateStatus($orderItem, $status)
    {
        $purchasedLinks = $this->findByField('order_item_id', $orderItem->id);

        foreach ($purchasedLinks as $purchasedLink) {
            if ($status == 'expired') {
                if (count($purchasedLink->order_item->invoice_items) > 0) {
                    $totalInvoiceQty = 0;

                    foreach ($purchasedLink->order_item->invoice_items as $invoice_item) {
                        $totalInvoiceQty = $totalInvoiceQty + $invoice_item->qty;
                    }

                    $orderedQty = $purchasedLink->order_item->qty_ordered;
                    $totalInvoiceQty = $totalInvoiceQty * ($purchasedLink->download_bought / $orderedQty);

                    $this->update([
                        'status' => $purchasedLink->download_used == $totalInvoiceQty ? $status : $purchasedLink->status,
                        'download_canceled' => $purchasedLink->download_bought - $totalInvoiceQty,
                    ], $purchasedLink->id);
                } else {
                    $this->update([
                        'status' => $status,
                        'download_canceled' => $purchasedLink->download_bought,
                    ], $purchasedLink->id);
                }
            } else {
                $this->update([
                    'status' => $status,
                ], $purchasedLink->id);
            }
        }
    }
}