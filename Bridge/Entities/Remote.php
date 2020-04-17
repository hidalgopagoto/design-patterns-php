<?php
namespace Entities;

class Remote
{
    /**
     * @var Device
     */
    private $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume(--$volume);
    }

    public function volumeUp()
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume(++$volume);
    }

    public function channelDown()
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel(--$channel);
    }

    public function channelUp()
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel(++$channel);
    }

    /**
     * @return Device
     */
    public function getDevice(): Device
    {
        return $this->device;
    }
}