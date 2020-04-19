<?php
namespace Interfaces;

interface YoutubeInterface
{
    public function listVideos(): array;
    public function getVideoInfo(int $id): array;
    public function downloadVideo(int $id): string;
}