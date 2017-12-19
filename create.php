<?php

require_once('vendor/autoload.php');

use RPGManager\Utils\Parser;

if (file_exists('./src/Entity')) {
    echo "Deleting src/Entity \n";
    $rmEntity = shell_exec('rm -rf ./src/Entity*');
}
echo "Copying Entities to src/Entity \n";
$copyEntity = shell_exec('cp -R vendor\rpgmanager\rpgmanager\src\RPGManager\Entity\ src\\');

$allFiles = scandir('./src/Entity');
$files = array_diff($allFiles, array('.', '..'));
foreach ($files as $file) {
    $data = file_get_contents("src/Entity/" . $file);
    $replaceStr = str_replace("RPGManager", "src", $data);
    file_put_contents("src/Entity/" . $file, $replaceStr);
}

$createSqlDb = shell_exec('vendor\bin\doctrine orm:schema-tool:create --dump-sql');
echo $createSqlDb;
$createDb = shell_exec('vendor\bin\doctrine orm:schema-tool:create');
echo "Done!";

$configGame = file_get_contents('config/game.json');
$game = json_decode($configGame, true);

$settingsGame = file_get_contents('config/settings.json');
$settings = json_decode($settingsGame, true);

Parser::generateModelsDb($game, $settings);

