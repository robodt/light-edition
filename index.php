<?php

// Set site location
$site = __dir__ . DIRECTORY_SEPARATOR . 'site';

// Load Composer autoloader
require 'vendor/autoload.php';

// Bootstrap Robodt site
$cms = new Robodt\Adapter\Framework\Slim\AdapterFrameworkSlim($site);