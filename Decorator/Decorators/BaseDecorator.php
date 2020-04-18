<?php
namespace Decorators;

use Interfaces\NotifierInterface;

abstract class BaseDecorator implements NotifierInterface
{

    protected $baseNotifier;

    public function __construct(NotifierInterface $baseNotifier)
    {
        $this->baseNotifier = $baseNotifier;
    }

    public function send(): bool
    {
        return $this->baseNotifier->send();
    }
}