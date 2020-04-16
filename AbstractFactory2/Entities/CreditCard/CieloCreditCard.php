<?php
namespace Entities\CreditCard;
use Interfaces\CreditCardInterface;

class CieloCreditCard implements CreditCardInterface
{

    public function pay(): array
    {
        echo 'Paying by Cielo credit card<br/>';
        return [];
    }

    public function authorize(): array
    {
        // TODO: Implement authorize() method.
    }

    public function capture(): array
    {
        // TODO: Implement capture() method.
    }
}