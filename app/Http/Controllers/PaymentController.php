<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    //
    public function razorpay()
    {        
        return view('payment');
    }
  
    
    public function payment(Request $request)
    {
        $input = $request->all();
  
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                $payment = payment::create([
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount']/100,
                    'json_response' => json_encode((array)$response)
                ]);
            } catch (Exception $e) {
                return  $e->getMessage();
                // Session::put('error',$e->getMessage());
                return redirect()->back()->with(['error'=>$e->getMessage()]);
            }
        }
        
        // Session::put('success', 'Payment successful');
        return redirect()->back()->with(['success'=>'payment successfull']);

    }
}
