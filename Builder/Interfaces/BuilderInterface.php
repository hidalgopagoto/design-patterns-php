<?php
namespace Interfaces;

interface BuilderInterface {
    public function reset(): void;
    public function getResult();
}