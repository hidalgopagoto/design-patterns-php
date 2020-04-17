<?php
namespace Entities;

use Interfaces\DeviceInterface;

abstract class Device implements DeviceInterface
{
    /**
     * @var bool
     */
    protected $isEnabled;

    /**
     * @var int
     */
    protected $volume;

    /**
     * @var int
     */
    protected $channel;

    public function __construct()
    {
        $this->enable();
    }


    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function enable(): void
    {
        $this->isEnabled = true;
        $this->setChannel(1);
        $this->setVolume(1);
    }

    public function disable(): void
    {
        $this->isEnabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }
}