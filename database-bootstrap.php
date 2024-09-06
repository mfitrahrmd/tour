<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => "mysql",
    "host" => "host.docker.internal",
    "database" => "tour",
    "username" => "root",
    "password" => "root"
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
