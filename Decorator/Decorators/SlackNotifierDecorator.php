<?php
namespace Decorators;

use Interfaces\NotifierInterface;

class SlackNotifierDecorator extends BaseDecorator
{
    public function send(): bool
    {
        parent::send();
        $this->extra();
        return true;
    }

    private function extra()
    {
        echo 'Sending Slack message<br/>';
    }
}