<?php
namespace Factories;
use Entities\PaymentSlip\ItauPaymentSlip;
use Interfaces\CreditCardInterface;
use Interfaces\GatewayInterface;
use Interfaces\PaymentSlipInterface;

class ItauGatewayFactory implements GatewayInterface
{

    public function createPaymentSlipCheckout(): PaymentSlipInterface
    {
        return new ItauPaymentSlip();
    }

    public function createCreditCardCheckout(): CreditCardInterface
    {
        throw new \Exception('Method not implemented', 405);
    }
}