<?php
namespace Entities;

use Interfaces\NotifierInterface;

class Notifier implements NotifierInterface
{

    public function send(): bool
    {
        echo 'Sending email<br/>';
        return true;
    }
}