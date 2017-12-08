<?php

require_once('vendor/autoload.php');

$configDb = file_get_contents('config/config.php');
$config = json_decode($configDb, true);

$configSettings = file_get_contents('config/settings.json');
$config = json_decode($configSettings, true);

