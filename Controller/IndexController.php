<?php
class indexController{
    public function renderIndexAction(){
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();
        require 'Vue/homeView.php';
    }
    public function renderComments($id){
        $commentManager = new CommentaireManager();
        $commentaires = $commentManager->selectByArticleId($id);
        require 'Vue/commentsVue.php';
    }
}
?>