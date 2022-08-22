<?php

class PaymentController {

    public function pay(Request $request) 
    {
        $paymentFactory = new PaymentFactory();
        $payment = $paymentFactory->initializePayment($request->type);
        $payment->pay();
    }
}