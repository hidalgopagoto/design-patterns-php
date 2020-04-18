<?php
namespace Decorators;

use Interfaces\NotifierInterface;

class SmsNotifierDecorator extends BaseDecorator
{
    public function send(): bool
    {
        parent::send();
        $this->extra();
        return true;
    }

    private function extra(): bool
    {
        echo 'Sending SMS<br/>';
        return true;
    }
}