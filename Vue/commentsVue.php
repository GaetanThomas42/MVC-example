<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>

<body>
<h2>Commentaries</h2>
<a class='btn btn-secondary' href="./index.php?controller=index&action=renderIndex">Return</a>
<div class="container">
    <div class="row">
        <?php
        foreach($commentaires as $commentaire){
            echo "<div class='col-md-3 col-sm-3'>
                            <h5 class='text-center'>By " . $commentaire->getAuteur() . "</h5>
                            <h5>" . $commentaire->getContenu() . "</h5></div>";
        }
        ?>
    </div>
</div>
</body>
</html>