<?php

class PaymentController {
    public function pay(Request $request) {
        $payment = new Payment();

        if ($request->type === 'credit') {
            $payment->payWithCreditCard();
        } elseif ($request->type) {
            $payment->payWithPaypal();
        } else {
            $payment->payWithWireTransfer();
        }

        // Problem: each time we would like to add
        // a payment method, we are forced to add
        // an if statment, a method implementation on
        // the Payment class, which is causing violation
        // of Open/Closed Principle.
    }
}