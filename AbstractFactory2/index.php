<?php

use Factories\CheckoutFactory;
use Factories\CieloGatewayFactory;
use Factories\CitibankGatewayFactory;
use Factories\ItauGatewayFactory;
use Factories\RedeGatewayFactory;

require('autoload.php');

# Calling directly
$itauPaymentSlip = (new ItauGatewayFactory())->createPaymentSlipCheckout()->pay();
$citibankPaymentSlip = (new CitibankGatewayFactory())->createPaymentSlipCheckout()->pay();
$redeCreditCard = (new RedeGatewayFactory())->createCreditCardCheckout()->pay();
$cieloCreditCard = (new CieloGatewayFactory())->createCreditCardCheckout()->pay();


# With a factory that gets data from input variables and instanciate payment method
$bank = 'citibank';
$method = 'paymentslip';

$checkout = (new CheckoutFactory())->get($bank, $method);
$checkout->pay();