<?php
include 'include.php';

if($_GET['controller'] === 'index') {
    $indexController = new IndexController();
    if ($_GET['action'] == 'renderIndex') {
        $indexController->renderIndexAction();
    } elseif ($_GET['action'] == 'renderComments'){
        $indexController->renderComments($_GET['target']);
    }
}else if($_GET['controller'] === 'article'){
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

}elseif ($_GET['controller'] == 'comment') {
    $commentaireController = new CommentaireController();
    if ($_GET['action'] == 'select') {
        $commentaireController->renderComments();
    }else if ($_GET['action'] == 'insertForm') {
        $commentaireController->renderInsert($_GET['target']);
    } elseif ($_GET['action'] == 'selectAll') {
        $commentaireController->renderComments();
    } elseif ($_GET['action'] == 'deleteForm' && isset($_GET['target'])) {
        $commentaireController->renderDelete($_GET['target']);
    } elseif ($_GET['action'] == 'updateForm' && isset($_GET['target'])) {
        $commentaireController->renderUpdate($_GET['target']);
    } elseif ($_GET['action'] == 'insert') {
        $commentaireController->insert($_GET['target']);
    } elseif ($_GET['action'] == 'delete') {
        $commentaireController->delete();
    } elseif ($_GET['action'] == 'update') {
        $commentaireController->update($_GET['target']);
    }
}else{
    throw new Exception("Page not found",404);
}
?>