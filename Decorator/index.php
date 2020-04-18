<?php

use Decorators\SmsNotifierDecorator;
use Entities\Notifier;

require('autoload.php');

$notifier = new Notifier();
$smsNotifier = new SmsNotifierDecorator($notifier);
$slackNotifier = new \Decorators\SlackNotifierDecorator($smsNotifier);

$slackNotifier->send();