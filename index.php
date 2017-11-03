<?php

require 'config.php';


// connexion à la base de donnée et message d'erreur :
try {
    $database = new PDO($dataSourceName, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
} 

// récupération des données qui nous intéressent :
$posts = $database->query('SELECT * FROM t_posts order by post_id desc'); 



// on inclut et exécute le fichier view.php :
require 'view.php';


// ommission volontaire de la balise fermante :
// bonne pratique pour les fichiers ne contenant que du php