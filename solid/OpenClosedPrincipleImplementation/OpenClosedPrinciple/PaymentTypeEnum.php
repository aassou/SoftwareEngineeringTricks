<?php

enum PaymentTypeEnum: string {
    case CREDITCARD = 'creditcard';
    case PAYPAL = 'paypal';
    case WIRETRANSFER = 'wiretransfer';
}