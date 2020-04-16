<?php
namespace Entities;

class MySql
{

    private static $instance;

    private $createdAt;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
            self::$instance->createdAt = (new \DateTime())->format('Y-m-d H:i:s');
        }
        return self::$instance;
    }

    public function connect()
    {
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}