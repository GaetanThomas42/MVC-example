<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}

if($_GET['controller'] === 'article' && isset($_GET['action'])){
    $articleController = new articleController();
    if ($_GET['action'] == 'insert'){
        $articleController->renderInsert();
    }elseif ($_GET['action'] == 'selectAll'){
        $articleController->renderArticles();
    }elseif ($_GET['action'] == 'delete' && isset($_GET['target'])){
        $articleController->renderDelete($_GET['target']);
    }elseif ($_GET['action'] == 'update' && isset($_GET['target'])){
        $articleController->renderUpdate($_GET['target']);
    }
}
?>