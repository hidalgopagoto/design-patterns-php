<?php
namespace Proxies;

use Interfaces\YoutubeInterface;

class YoutubeLibProxy implements YoutubeInterface
{

    /**
     * @var YoutubeInterface
     */
    private $service;

    /**
     * @var array
     */
    private $listCache;

    /**
     * @var array
     */
    private $infoCache;

    /**
     * @var string
     */
    private $downloadCache;

    public function __construct(YoutubeInterface $service)
    {
        $this->service = $service;
    }

    public function listVideos(): array
    {
        if (empty($this->listCache)) {
            $list = $this->service->listVideos();
            $this->listCache = $list;
        } else {
            $list = $this->listCache;
            echo 'Got Youtube list from cache<br/>';
        }
        return $list;
    }

    public function getVideoInfo(int $id): array
    {
        if (empty($this->infoCache)) {
            $info = $this->service->getVideoInfo($id);
            $this->infoCache = $info;
        } else {
            $info = $this->infoCache;
            echo 'Got Youtube video from cache<br/>';
        }
        return $info;
    }

    public function downloadVideo(int $id): string
    {
        if (empty($this->downloadCache)) {
            $download = $this->service->downloadVideo($id);
            $this->downloadCache = $download;
        } else {
            echo 'Got Youtube download from cache<br/>';
            $download = $this->downloadCache;
        }
        return $download;
    }
}