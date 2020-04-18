<?php
namespace Interfaces;

interface NotifierInterface
{
    public function send(): bool;
}