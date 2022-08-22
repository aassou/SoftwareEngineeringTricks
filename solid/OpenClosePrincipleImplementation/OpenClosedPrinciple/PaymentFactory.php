<?php

class PaymentFactory {

    public function initializePayment($type) {
        if ($type === PaymentTypeEnum::CREDITCARD) {
            return new CreditCardPayment();
        } elseif ($type === PaymentTypeEnum::PAYPAL) {
            return new PaypalPayment();
        } elseif ($type === PaymentTypeEnum::WIRETRANSFER) {
            return new WirePayment();
        }

        throw new Exception("Unsupported payment method")
    }
}