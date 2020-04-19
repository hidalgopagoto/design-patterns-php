<?php

use Entities\YoutubeLib;
use Entities\YoutubeManager;
use Proxies\YoutubeLibProxy;

require('autoload.php');

$lib = new YoutubeLib();
$libProxy = new YoutubeLibProxy($lib);
$manager = new YoutubeManager($libProxy);

for ($i = 1; $i <= 10; $i++) {
    $manager->renderListPanel();
}

for ($i = 1; $i <= 10; $i++) {
    $manager->renderVideoPage(1);
}