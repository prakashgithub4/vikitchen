<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;

class PaytmController extends Controller
{
     /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function pay() {

        $payment = PaytmWallet::with('receive');

        $payment->prepare([
          'order' => 24421334, // your order id taken from cart
          'user' => 'Cust_id_12', // your user id
          'mobile_number' => 8017964102, // your customer mobile no
          'email' => 'kayal.sufian.abu@gmail.com', // your user email address
          'amount' => 120000.00, // amount will be paid in INR.
          'callback_url' => 'http://localhost:8080/apple/public/payment/status' // callback URL
        ]);

        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        //return $transaction;

        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm

        if($transaction->isSuccessful()){

        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
      echo   $transaction->getResponseMessage(); //Get Response Message If Available
      echo '<br>';
        //get important parameters via public methods
       echo $transaction->getOrderId(); // Get order id
       echo '<br>';

        echo $transaction->getTransactionId(); // Get transaction id

    }
}
