<?php
namespace Factories;

use Entities\CreditCard\RedeCreditCard;
use Interfaces\CreditCardInterface;
use Interfaces\GatewayInterface;
use Interfaces\PaymentSlipInterface;

class RedeGatewayFactory implements GatewayInterface
{

    public function createPaymentSlipCheckout(): PaymentSlipInterface
    {
        throw new \Exception('Method not implemented', 405);
    }

    public function createCreditCardCheckout(): CreditCardInterface
    {
        return new RedeCreditCard();
    }
}