<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Karim007\LaravelBkashTokenize\Facade\BkashPaymentTokenize;
use Karim007\LaravelBkashTokenize\Facade\BkashRefundTokenize;
use Illuminate\Support\Facades\Log;

class BkashTokenizePaymentController extends Controller
{
    public function index()
    {
        // CHANGED: Load your custom view file here
        return view('payment-test');
    }

    public function createPayment(Request $request)
    {
        // 1. Generate Unique Invoice & Get Amount
        $inv = uniqid();
        $amount = $request->input('amount', 10); // Default to 10 if not provided

        $request['intent'] = 'sale';
        $request['mode'] = '0011'; // 0011 for checkout
        $request['payerReference'] = $inv;
        $request['currency'] = 'BDT';
        $request['amount'] = $amount;
        $request['merchantInvoiceNumber'] = $inv;
        $request['callbackURL'] = config("bkash.callbackURL");

        $request_data_json = json_encode($request->all());

        // 2. Call bKash API to create payment
        $response = BkashPaymentTokenize::cPayment($request_data_json);

        // 3. Redirect to bKash Gateway
        if (isset($response['bkashURL'])) {
            return redirect()->away($response['bkashURL']);
        } else {
            // Log error for debugging
            Log::error("bKash Create Payment Failed", ['response' => $response]);
            return redirect()->back()->with('error-alert2', $response['statusMessage'] ?? 'Unknown Error');
        }
    }

    public function callBack(Request $request)
    {
        // Check for specific payment status (success, cancel, failure)
        if ($request->status == 'success') {
            
            // 1. Execute Payment (Must be done to capture the money)
            $response = BkashPaymentTokenize::executePayment($request->paymentID);

            // If execute fails, try querying the payment status
            if (!$response) { 
                $response = BkashPaymentTokenize::queryPayment($request->paymentID);
            }

            // 2. Validate Success
            if (isset($response['statusCode']) && $response['statusCode'] == "0000" && $response['transactionStatus'] == "Completed") {
                
                // ============================================================
                // TODO: DATABASE UPDATE REQUIRED HERE
                // ============================================================
                // Example:
                // $order = Order::where('invoice_no', $response['merchantInvoiceNumber'])->first();
                // $order->update([
                //     'status' => 'paid', 
                //     'transaction_id' => $response['trxID'],
                //     'payment_id' => $request->paymentID
                // ]);
                // ============================================================

                return BkashPaymentTokenize::success('Thank you for your payment', $response['trxID']);
            }
            
            return BkashPaymentTokenize::failure($response['statusMessage']);

        } else if ($request->status == 'cancel') {
            return BkashPaymentTokenize::cancel('Your payment is canceled');
        } else {
            return BkashPaymentTokenize::failure('Your transaction failed');
        }
    }

    public function searchTnx($trxID)
    {
        return BkashPaymentTokenize::searchTransaction($trxID);
    }

    public function refund(Request $request)
    {
        // In production, pass these values dynamically
        $paymentID = $request->input('paymentID'); 
        $trxID = $request->input('trxID');
        $amount = $request->input('amount');
        $reason = 'Refund request';
        $sku = 'sku-123';

        return BkashRefundTokenize::refund($paymentID, $trxID, $amount, $reason, $sku);
    }

    public function refundStatus(Request $request)
    {
        $paymentID = $request->input('paymentID');
        $trxID = $request->input('trxID');
        
        return BkashRefundTokenize::refundStatus($paymentID, $trxID);
    }
}