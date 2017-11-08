<?php

require 'config.php';

// connexion à la base de donnée et message d'erreur :
try {
    $pdo = new PDO($dataSourceName, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
} 