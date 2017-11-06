
<?php


function getPosts() {
	require 'pdo.php';
	// récupération des données qui nous intéressent :
	$pdo_statement = $pdo->query('SELECT * FROM t_posts order by post_id desc'); 
	return $pdo_statement;

	// pour être plus explicite, on pourrait ecrire :
	//
	// $pdo_statement = $pdo->query('SELECT * FROM t_posts');
	// $posts = $pdo_stateml:; ment;
	// 
	// (où $posts est un alias de la variable $pdo_statement)
}

