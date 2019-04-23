<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php include 'Vue/Parts/css.php'; ?>
</head>

<body>
<h1>Admin forum !</h1>
<a class='btn btn-secondary' href="./index.php?controller=index&action=renderIndex">Public View</a>
<div class="container">
        <!--Insert Car button-->
        <a class='btn bg-success my-3  text-light' href='./index.php?controller=article&action=insertForm' >
            <strong>ADD</strong> <i class="fas fa-2x fa-plus-circle mt-2"></i>
        </a>
        <!--Cars table-->
        <table class='table text-center'>
            <thead class='thead-dark'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Title</th>
                <th scope='col'>Content</th>
                <th scope='col'>Creation Date</th>
                <th scope='col'>Commentaries</th>
                <th scope='col'>Actions</th>
            </tr>
            </thead>
            <tbody id='tableBook'>
            <?php
            foreach($articles as $article){
                echo "<tr>
                            <th class='align-middle'><h5>" . $article->getId() . "</h5></th>
                            <td class='align-middle'><h5>" . $article->getTitre() . "</h5></td>
                            <td class='align-middle'><h5>" . $article->getContenu() . "</h5></td>
                            <td class='align-middle'><h6>" . $article->getDateCreation() . "</h6></td>
                            <td class='align-middle'><h6>" . $article->getNombreCommentaires() . "</h6></td>
                            <td class='align-middle'>
                                <a class='btn btn-info m-2 p-3' href='./index.php?controller=article&action=updateForm&target=". $article->getId() ."'>UPDATE</a>
                                <a class='btn btn-danger m-2 p-3' href='./index.php?controller=article&action=deleteForm&target=". $article->getId() ."'><i class='fas fa-1x fa-dumpster'></i></a>
                            </td>
                        </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>