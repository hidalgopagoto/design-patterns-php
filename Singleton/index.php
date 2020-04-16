<?php

use Entities\MySql;

require('autoload.php');

$mysqlConnector = Mysql::getInstance();

for ($i = 1; $i <= 5; $i++) {
    echo "Connecting to database with instance created on ".$mysqlConnector->getCreatedAt()."<br />";
    $mysqlConnector->connect();
    sleep(1);
}