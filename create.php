<?php

require_once('vendor/autoload.php');
use RPGManager\Utils\Parser;

$configGame = file_get_contents('config/game.json');
$game = json_decode($configGame, true);

$settingsGame = file_get_contents('config/settings.json');
$settings = json_decode($settingsGame, true);

Parser::generateModelsDb($game, $settings);

