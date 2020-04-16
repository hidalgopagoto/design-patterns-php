<?php
namespace Entities\PaymentSlip;
use Interfaces\PaymentSlipInterface;

class ItauPaymentSlip implements PaymentSlipInterface
{

    public function pay(): array
    {
        echo 'Paying by Itau payment slip<br/>';
        return [];
    }

    public function register(): array
    {
        // TODO: Implement register() method.
    }

    public function compensate(): array
    {
        // TODO: Implement compensate() method.
    }
}