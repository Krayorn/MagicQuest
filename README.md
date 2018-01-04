**MAGIC QUEST**

Ce repot vous est fourni afin de faciliter votre utilisation du RPGManager, il contient tout ce qui est nécessaire pour commencer à créer votre histoire, et même quelques histoires préconcues.

Pour tester les différentes histoires, il faut modifier le create et le start.php avec les nom des bon fichiers dans les variables ```$settigsGame``` et ```$configGame``` .

Ensuite, après avoir modifié les informations fournies dans le fichier config.php pour qu'elles correspondent à votre base de donnée, exécutez les commandes :
```
// Cette commande va créer votre base de données, puis la remplir avec toutes les informations nécessaires.
//** Attention cette commande peut prendre du temps à s'éxecuter en fonction de votre fichier de configuration. **//
php create.php
```

```
// Cette commande va créer votre base de données, puis la remplir avec toutes les informations nécessaires.
php start.php
```
