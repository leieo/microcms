<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
  </head>
  <body>

    <?php

    require 'model.php';

    createPost();

    ?>

	<h2><?php echo $_POST['titre']; ?></h2>
	<p><?php echo $_POST['contenu']; ?></p>
	<br/><br/><br/>
	<p>Cet article a été ajouté - <a href="index.php">Retour au journal</a></p>
  </body>
</html>

