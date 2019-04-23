<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon forum</title>
        <link href="style.css" rel="stylesheet" />
        <?php include 'Vue/Parts/css.php'; ?>
    </head>
    <body>
        <h2>Comments</h2>
        <a class='btn btn-secondary' href="./index.php?controller=article&action=updateForm&target=<?php echo $_GET['target']; ?>">Return</a>
        <div class="container">
            <!--Insert Car button-->
            <a class='btn bg-success my-3  text-light' href='./index.php?controller=comment&action=insertForm&target=<?php echo $_GET['target']; ?>' >
                <strong>ADD</strong> <i class="fas fa-2x fa-plus-circle mt-2"></i>
            </a>
            <!--Cars table-->
            <table class='table text-center'>
                <thead class='thead-dark'>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Auteur</th>
                    <th scope='col'>Contenu</th>
                    <th scope='col'>Article Id</th>
                    <th scope='col'>Actions</th>
                </tr>
                </thead>
                <tbody id='tableBook'>
                <?php
                foreach($commentaires as $commentaire){
                    echo "<tr>
                                    <th class='align-middle'><h5>" . $commentaire->getId() . "</h5></th>
                                    <td class='align-middle'><h5>" . $commentaire->getAuteur() . "</h5></td>
                                    <td class='align-middle'><h5>" . $commentaire->getContenu() . "</h5></td>
                                    <td class='align-middle'><h6>" . $commentaire->getArticleId() . "</h6></td>
                                    <td class='align-middle'>
                                        <a class='btn btn-info m-2 p-3' href='./index.php?controller=comment&action=updateForm&target=". $commentaire->getId() ."'>UPDATE</a>
                                        <a class='btn btn-danger m-2 p-3' href='./index.php?controller=comment&action=deleteForm&target=". $commentaire->getId() ."'><i class='fas fa-1x fa-dumpster'></i></a>
                                    </td>
                                </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>