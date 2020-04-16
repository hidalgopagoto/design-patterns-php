<?php
namespace Factories;

use Entities\PaymentSlip\CitibankPaymentSlip;
use Interfaces\CreditCardInterface;
use Interfaces\GatewayInterface;
use Interfaces\PaymentSlipInterface;

class CitibankGatewayFactory implements GatewayInterface
{

    public function createPaymentSlipCheckout(): PaymentSlipInterface
    {
        return new CitibankPaymentSlip();
    }

    public function createCreditCardCheckout(): CreditCardInterface
    {
        throw new \Exception('Method not implemented', 405);
    }
}