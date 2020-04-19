<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', $class_name) . '.php';
});