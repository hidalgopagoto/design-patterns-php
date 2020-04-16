<?php
namespace Interfaces;
interface GatewayInterface {
    public function createPaymentSlipCheckout(): PaymentSlipInterface;
    public function createCreditCardCheckout(): CreditCardInterface;
}