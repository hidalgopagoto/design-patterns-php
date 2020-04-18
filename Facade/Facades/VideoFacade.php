<?php
namespace Facades;

use Entities\FFMpeg;
use Entities\Youtube;

class VideoFacade
{

    private $encoded;

    private $ffmpeg;

    private $youtube;

    public function __construct()
    {
        $this->ffmpeg = new FFMpeg();
        $this->youtube = new Youtube();
    }

    public function download(): VideoFacade
    {
        $video = $this->youtube->download();

        $this->encoded = $this->ffmpeg->encode($video);

        return $this;
    }

    public function convert()
    {
        $this->ffmpeg->convert($this->encoded);
    }
}