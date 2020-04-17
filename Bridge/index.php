<?php

use Entities\Remote;
use Entities\TV;

require('autoload.php');

$tv = new TV();
$remote = new Remote($tv);

$remote->togglePower();
$remote->volumeUp();
$remote->channelUp();

echo 'Channel: '.$remote->getDevice()->getChannel().'<br />';
echo 'Volume: '.$remote->getDevice()->getVolume().'<br />';

for ($i = 1; $i <= 10; $i++) {
    $remote->channelUp();
}

for ($i = 1; $i <= 25; $i++) {
    $remote->volumeUp();
}

echo 'Channel: '.$remote->getDevice()->getChannel().'<br />';
echo 'Volume: '.$remote->getDevice()->getVolume().'<br />';