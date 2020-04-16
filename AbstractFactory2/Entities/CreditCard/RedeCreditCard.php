<?php
namespace Entities\CreditCard;
use Interfaces\CreditCardInterface;

class RedeCreditCard implements CreditCardInterface
{

    public function pay(): array
    {
        echo 'Paying by Rede credit card<br/>';
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