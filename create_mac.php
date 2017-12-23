<?php

require_once('vendor/autoload.php');
require_once('./config.php');

use RPGManager\Utils\Parser;

if (file_exists('./src/Entity')) {
	echo "Deleting src/Entity \n";
	$rmEntity = shell_exec('rm -rf ./src/Entity*');
}

shell_exec('mkdir ./src/Entity');
echo "Copying Entities to src/Entity/ \n";
$copyEntity = shell_exec('cp -R vendor/rpgmanager/rpgmanager/src/RPGManager/Entity/ ./src/Entity/');


$allFiles = scandir('./src/Entity');
$files = array_diff($allFiles, array('.', '..'));

foreach ($files as $file) {
	$data = file_get_contents("src/Entity/" . $file);
	$replaceStr = str_replace("RPGManager", "src", $data);
	file_put_contents("src/Entity/" . $file, $replaceStr);
}

$mysqli = new mysqli($conn['host'], $conn['user'], $conn['password'], $conn['dbname']);
if ($result = $mysqli->query("SHOW TABLES")) {
	echo "Dropping " . $conn['dbname'] . " database \n";
	$mysqli->query('DROP DATABASE ' . $conn['dbname']);
	echo "Creating a new " . $conn['dbname'] . " database \n\n";
	$mysqli->query('CREATE DATABASE ' . $conn['dbname']);
}

$createSqlDb = shell_exec('vendor/bin/doctrine orm:schema-tool:create --dump-sql');
echo $createSqlDb;
$createDb = shell_exec('vendor/bin/doctrine orm:schema-tool:create');
echo "Done!";


$configGame = file_get_contents('config/burglar.json');
$game = json_decode($configGame, true);

$settingsGame = file_get_contents('config/settings.json');
$settings = json_decode($settingsGame, true);

Parser::generateModelsDb($game, $settings, $entityManager);

