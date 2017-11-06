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

        <?php foreach ($posts as $post):  ?>

        <article>
            <h2><?php echo $post ['post_title'] ?></h2>
            <p><?php echo $post['post_content'] ?></p>
        </article>

        <?php 

        endforeach 

        ?>

        <!-- -->

        <form action="form.php" method="POST">
            <p>
                <input type="text" name="titre" />
                <textarea name="contenu" rows="8" cols="60"></textarea>
                <input type="submit" value="Valider" />
            </p>
        </form>

        <footer class="footer">

            <a href="https://github.com/bpesquet/OC-MicroCMS">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development

        </footer>

    </body>

</html>