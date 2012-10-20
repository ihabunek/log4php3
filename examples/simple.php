<?php

require '../vendor/autoload.php';

use \Apache\log4php\Logger;

$logger = Logger::getLogger("foo");
$logger->info("bar");
