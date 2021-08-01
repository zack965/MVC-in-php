<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    "driver" => "mysql",
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'to_do_app',
    'charset' => 'utf8',
    'collector' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->bootEloquent();