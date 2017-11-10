<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <link href="microcms.css" rel="stylesheet" />
        <title>MicroCMS - Home</title>
    </head>

    <body>
    	hello
    	<?php 

    	$readPost_id = $_GET['id'];

    	echo $readPost_id; 

    	$readPost = readPost();

    	echo $readPost['post_title'];



    	?>

    </body>
</html>