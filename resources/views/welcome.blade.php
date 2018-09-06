<?php

$path = storage_path() . "/world.json"; // ie: /var/www/laravel/app/storage/json/filename.json

$json = json_decode($path);

echo $json;