<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Transaction;

class PaymentsController extends Controller
{
    public function make(Request $request)
    {
        $payload = $request['payload'];
        $nonce = $payload['nonce'];
        $status = Transaction::sale([
            'amount' => 10,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => True
              ]
        ]);
        return response()->json($status);
    }
}
