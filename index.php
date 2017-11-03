<?php

require 'pdo.php';

// récupération des données qui nous intéressent :
$posts = $pdo->query('SELECT * FROM t_posts order by post_id desc'); 

// pour être plus explicite, on pourrait ecrire :
//
// $pdo_statement = $pdo->query('SELECT * FROM t_posts');
// $posts = $pdo_statement;
// 
// (où $posts est un alias de la variable $pdo_statement)



// on inclut et exécute le fichier view.php :
require 'view.php';


// ommission volontaire de la balise fermante :
// bonne pratique pour les fichiers ne contenant que du php