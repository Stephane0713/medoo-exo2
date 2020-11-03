<?php

// On requiere Medoo.php pour pouvoir s'en servir
require_once 'Medoo.php';

// On precise que l'on utilise la class Medoo de Medoo.php (à vérifier)
use Medoo\Medoo;

// On créer une nouvelle instance de class de Medoo à laquelle on passe un tableau d'information pour se connecter à notre base de donnée
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'sitenv2',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
]);
