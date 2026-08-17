<?php

namespace DeFaoite\Admin\Http\Controllers\Catalog\Product;

use Illuminate\Http\JsonResponse;
use DeFaoite\Admin\Http\Controllers\Controller;
use DeFaoite\Product\Helpers\BundleOption;
use DeFaoite\Product\Repositories\ProductRepository;

class BundleController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected ProductRepository $productRepository,
        protected BundleOption $bundleOptionHelper
    ) {}

    /**
     * Returns the compare items of the customer.
     */
    public function options(int $id): JsonResponse
    {
        $product = $this->productRepository->findOrFail($id);

        return new JsonResponse([
            'data' => $this->bundleOptionHelper->getBundleConfig($product),
        ]);
    }
}
