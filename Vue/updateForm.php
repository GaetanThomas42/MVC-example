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
    <form class='form-group col-md-3' method='post' action='./index.php?controller=article&action=update&target=<?php echo $article->getId(); ?>'>
        <label>Titre</label><input class='form-control' type='text' name='titre' value='<?php echo $article->getTitre(); ?>'>
        <label>Contenu</label><input class='form-control' type='text' name='contenu' value='<?php echo $article->getContenu(); ?>'>
        <button class='btn btn-success'>Update</button>
        <a class='btn btn-secondary' href='./index.php?controller=article&action=selectAll'>Return</a>
    </form>
</div>
</body>