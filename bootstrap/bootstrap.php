<?php

use Webinity\Framework\Bootstrapper;

$bootstrap = new Bootstrapper(__DIR__ . '/../', __DIR__ . '/../config', __DIR__ . '/../var/cache/container');
return $bootstrap->app();
