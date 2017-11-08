
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

function getPostlist() {
	
	require 'pdo.php';
	// récupération des données qui nous intéressent :
	$statement = $pdo->query('SELECT post_title FROM t_posts'); 
	return $statement;
}


function createPosts() {
	require 'pdo.php';

	$pdo->exec('INSERT INTO t_posts(post_title, post_content) VALUES(\'echo $_POST[\'titre\']\', \'echo $_POST[\'contenu\']\')');
	
	echo 'Nouvel article ajouté :';
}




function create() {

    $title = $_POST['titre'];
    $content = $_POST['contenu'];

    require 'pdo.php';

    $pdo->exec("INSERT INTO t_posts(post_title, post_content) VALUES('$title', '$content')");
    
    echo 'Nouvel article ajouté :';

}
