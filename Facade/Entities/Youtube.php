<?php
namespace Entities;

class Youtube {
    public function watch(): void
    {

    }
    public function download(): string
    {
        echo 'Downloading video...<br />';
        return 'link';
    }
    public function upload(): void
    {

    }
}