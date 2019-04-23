<?php
class indexController{
    public function renderIndexAction(){
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();
        require 'Vue/homeView.php';
    }
}
?>