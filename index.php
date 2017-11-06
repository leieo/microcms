<?php

require 'model.php';

$posts = getPosts();

// on inclut et exécute le fichier view.php :
require 'view.php';


// ommission volontaire de la balise fermante :
// bonne pratique pour les fichiers ne contenant que du php