<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>
<body>
<h2>Add a Comment</h2>
<div class='row p-5 m-3'>
    <form class='form-group col-md-3' method='post' action='index.php?controller=comment&action=insert&target=<?php echo $id; ?>'>
        <label for="auteur">Auteur</label><input class='form-control' name="auteur" type="text">
        <label for="contenu">Contenu</label><input class='form-control' name="contenu" type="text">
        <button class="btn btn-success">Submit</button>
        <a class="btn btn-secondary" href="index.php?controller=comment&action=select">Return</a>
    </form>
</div>
</body>
