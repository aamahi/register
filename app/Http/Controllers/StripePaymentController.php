<?php

namespace App\Http\Controllers;

use App\Model\Order_list;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe;
use Session;
class StripePaymentController extends Controller
{

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $total=   $request->total;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $total * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment From Ecommerce",
        ]);

        $order = [];
        $order['name'] = $request->name;
        $order['user_id'] = $request->user_id;
        $order['email'] = $request->email;
        $order['phone'] = $request->phone;
        $order['address'] = $request->address;
        $order['zip'] = $request->zip;
        $order['city'] = $request->city;
        $order['payment'] = $request->payment;
        $order['subtotal'] = $request->subtotal;
        $order['total'] = $request->total;
        $order['status'] = 0;
        $order['created_at'] = Carbon::now();

        $order_id = \App\Model\Order::insertGetId($order);

        //Order Table
        foreach (\App\Model\Cart::where('ip_address', request()->ip())->get() as $cart) {
            Order_list::insert([
                'user_id' => $request->user_id,
                'order_id' => $order_id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);
            // Delete Form Cart
            \App\Model\Product::find($cart->product_id)->decrement('quantity', $cart->quantity);
            \App\Model\Cart::find($cart->id)->delete();
        }
        $notification = array(
            'message' => "Payment Sucessfully and Thanks For Shoping !",
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);

    }
}
