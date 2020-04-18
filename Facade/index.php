<?php

use Facades\VideoFacade;

require('autoload.php');

$video = new VideoFacade();
$result = $video->download()->convert();