<?php
namespace Entities;

use Interfaces\YoutubeInterface;

class YoutubeManager
{
    /**
     * @var YoutubeInterface
     */
    private $service;

    public function __construct(YoutubeInterface $service)
    {
        $this->service = $service;
    }

    public function renderVideoPage(int $id)
    {
        $info = $this->service->getVideoInfo($id);
    }

    public function renderListPanel()
    {
        $list = $this->service->listVideos();
    }
}