<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon forum</title>
        <link href="style.css" rel="stylesheet" />
        <?php include 'Vue/Parts/css.php'; ?>
    </head>
    <body>
        <h2>Update an Article</h2>
        <div class='row p-5 m-3'>
            <form class='form-group col-md-3' method='post' action='./index.php?controller=comment&action=update&target=<?php echo $commentaire->getId(); ?>'>
                <label>Contenu</label><input class='form-control' type='text' name='contenu' value='<?php echo $commentaire->getContenu(); ?>'>
                <button class='btn btn-success'>Update</button>
                <a class='btn btn-secondary' href='./index.php?controller=comment&action=select&target=<?php echo $commentaire->getArticleId(); ?>'>Return</a>
            </form>
        </div>
    </body>
</html>
