<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class RazorpayController extends Controller
{
    public function createOrder()
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order = $api->order->create([
            'receipt' => 'order_'.rand(1000,9999),
            'amount' => 100 * 100, // Amount in paise (INR 100 = 10000 paise)
            'currency' => 'INR',
            'payment_capture' => 1 // Auto capture
        ]);

        return view('razorpay.payment', ['order' => $order]);
    }

    public function handlePayment(Request $request)
    {
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $payment = $api->payment->fetch($request->razorpay_payment_id);

            if ($payment->status == 'captured') {
                return redirect()->route('payment.success');
            } else {
                return redirect()->route('payment.failed');
            }
        } catch (Exception $e) {
            return redirect()->route('payment.failed')->with('error', $e->getMessage());
        }
    }

    public function success()
    {
        return view('razorpay.success');
    }

    public function failed()
    {
        return view('razorpay.failed');
    }
}
