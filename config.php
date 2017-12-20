<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once ("vendor/autoload.php");

$config = Setup::createAnnotationMetadataConfiguration([
    __DIR__ . '/src'
], true);

$conn = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'port' => null,
    'dbname' => 'php_rpgmanager',
    'user' => 'php',
    'password' => 'php'
];

$entityManager = EntityManager::create($conn, $config);
