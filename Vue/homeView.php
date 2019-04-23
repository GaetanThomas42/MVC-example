<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>

<body>
<h1>Mon super forum !</h1>
<a class='btn btn-secondary' href='./index.php?controller=article&action=selectAll'>Admin Vue</a>
<p>Derniers articles du forum :</p>


<?php
  foreach ($articles as $article){
?>

<div class="news">
    <h3>
                <?php echo $article->getTitre(); ?>
<em> le <?php echo $article->getDateCreation() ?></em>
</h3>

<p>
    <?php
    echo nl2br(htmlspecialchars($article->getContenu()));
    ?>
    <br />
    <em><a class="btn btn-info" href="#">Commentaires</a></em>
</p>
</div>
<?php
 }
?>
</body>
</html>