<?php

namespace DeFaoite\Paypal\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;
use DeFaoite\Checkout\Facades\Cart;
use DeFaoite\Paypal\Helpers\Ipn;
use DeFaoite\Sales\Repositories\OrderRepository;
use DeFaoite\Sales\Transformers\OrderResource;

class StandardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected OrderRepository $orderRepository,
        protected Ipn $ipnHelper
    ) {}

    /**
     * Redirects to the paypal.
     *
     * @return View
     */
    public function redirect()
    {
        return view('paypal::standard-redirect');
    }

    /**
     * Cancel payment from paypal.
     *
     * @return Response
     */
    public function cancel()
    {
        session()->flash('error', trans('shop::app.checkout.cart.paypal-payment-cancelled'));

        return redirect()->route('shop.checkout.cart.index');
    }

    /**
     * Success payment.
     *
     * @return Response
     */
    public function success()
    {
        $cart = Cart::getCart();

        $data = (new OrderResource($cart))->jsonSerialize();

        $order = $this->orderRepository->create($data);

        Cart::deActivateCart();

        session()->flash('order_id', $order->id);

        return redirect()->route('shop.checkout.onepage.success');
    }

    /**
     * Paypal IPN listener.
     *
     * @return Response
     */
    public function ipn()
    {
        $this->ipnHelper->processIpn(request()->all());
    }
}
