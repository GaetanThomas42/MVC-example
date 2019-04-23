<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}else if($_GET['controller'] === 'article' && isset($_GET['action'])){
    $articleController = new articleController();
    if ($_GET['action'] == 'insertForm'){
        $articleController->renderInsert();
    }elseif ($_GET['action'] == 'selectAll'){
        $articleController->renderArticles();
    }elseif ($_GET['action'] == 'deleteForm' && isset($_GET['target'])){
        $articleController->renderDelete($_GET['target']);
    }elseif ($_GET['action'] == 'updateForm' && isset($_GET['target'])){
        $articleController->renderUpdate($_GET['target']);
    }elseif ($_GET['action'] == 'insert'){
        $articleController->insert();
    }elseif ($_GET['action'] == 'delete'){
        $articleController->delete();
    }elseif ($_GET['action'] == 'update'){
        $articleController->update($_GET['target']);
    }
}else{
    throw new Exception("Page not found",404);
}
?>