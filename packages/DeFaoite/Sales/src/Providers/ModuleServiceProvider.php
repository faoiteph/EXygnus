<?php

namespace DeFaoite\Sales\Providers;

use DeFaoite\Core\Providers\CoreModuleServiceProvider;
use DeFaoite\Sales\Models\DownloadableLinkPurchased;
use DeFaoite\Sales\Models\Invoice;
use DeFaoite\Sales\Models\InvoiceItem;
use DeFaoite\Sales\Models\Order;
use DeFaoite\Sales\Models\OrderAddress;
use DeFaoite\Sales\Models\OrderComment;
use DeFaoite\Sales\Models\OrderItem;
use DeFaoite\Sales\Models\OrderPayment;
use DeFaoite\Sales\Models\OrderTransaction;
use DeFaoite\Sales\Models\Refund;
use DeFaoite\Sales\Models\RefundItem;
use DeFaoite\Sales\Models\Shipment;
use DeFaoite\Sales\Models\ShipmentItem;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        DownloadableLinkPurchased::class,
        Invoice::class,
        InvoiceItem::class,
        Order::class,
        OrderAddress::class,
        OrderComment::class,
        OrderItem::class,
        OrderPayment::class,
        OrderTransaction::class,
        Refund::class,
        RefundItem::class,
        Shipment::class,
        ShipmentItem::class,
    ];
}
