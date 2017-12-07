<?php

require_once('vendor/autoload.php');
use RPGManager\Utils\Parser;

$configGame = file_get_contents('config/game.json');
$game = json_decode($configGame, true);

Parser::generateModelsDb($game);

