<?php
namespace Entities;

use Interfaces\YoutubeInterface;

class YoutubeLib implements YoutubeInterface
{

    public function listVideos(): array
    {
        echo 'Listing videos from Youtube<br/>';
        return [
            [
                'title' => 'Video 1',
                'url' => 'youtube.com/video1'
            ],
            [
                'title' => 'Video 2',
                'url' => 'youtube.com/video2'
            ]
        ];
    }

    public function getVideoInfo(int $id): array
    {
        echo 'Getting video info from Youtube<br/>';
        return [
            'title' => 'Video ' . $id,
            'description' => 'Description of video '.$id
        ];
    }

    public function downloadVideo(int $id): string
    {
        echo 'Downloading video from Youtube<br/>';
        return 'youtube.com/video' . $id;
    }
}