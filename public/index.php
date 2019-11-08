<?php

// on charge le fichier autoload de composer
// c'est un fichier généré par composer qui permet de récupérer toutes mes dépendances
require __DIR__ . '/../vendor/autoload.php';


require __DIR__ . '/../app/Application.php';
use App\Application;

// j'instancie la classe (le constructeur est appelé, je récupère un objet de type Application avec toutes ses propriétés et ses méthodes)
$app = Application::getInstance();

// j'execute la méthode run
$app->run();
