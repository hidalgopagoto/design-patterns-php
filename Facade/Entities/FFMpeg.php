<?php
namespace Entities;

class FFMpeg
{
    public function convert(): void
    {
        echo 'Converting video...<br />';
    }

    public function encode(string $video): void
    {
        echo 'Encoding video<br />';
    }

    public function decode(): void
    {

    }
}