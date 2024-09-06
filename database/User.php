<?php
require "../database-bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});

Capsule::schema()->create('tours', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('description');
    $table->int('description');
    $table->timestamps();
});
