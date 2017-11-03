<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>

<body>
    <header>
        <h1>MicroCMS</h1>
    </header>

    <?php

    $dataSourceName = 'mysql:host=localhost;dbname=microcms;charset=utf8';
    $user = 'root';
    $password = 'simplonco';



    try {
        $database = new PDO($dataSourceName, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    } 

    $posts = $database->query('SELECT * FROM t_posts order by post_id desc');

    foreach ($posts as $post): 

    ?>

    <article>
        <h2><?php echo $post['post_title'] ?></h2>
        <p><?php echo $post['post_content'] ?></p>
    </article>

    <?php 

    endforeach 

    ?>

    <footer class="footer">

        <a href="https://github.com/bpesquet/OC-MicroCMS">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.

    </footer>

</body>

</html>