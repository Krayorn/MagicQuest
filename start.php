<?php

require_once('vendor/autoload.php');
require_once('./config.php');

use RPGManager\Model\Game;

Game::startGame($entityManager);
