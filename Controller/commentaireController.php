<?php
class CommentaireController{
    public function renderComments(){
        $commentaireManager = new CommentaireManager();
        $commentaires = $commentaireManager->selectByArticleId($_GET['target']);
        require 'Vue/commentaireVue.php';
    }
    public function renderInsert($id){
        require 'Vue/insertFormComment.php';
    }
    public function insert(){
        $commentaire = new Commentaire(null, $_POST['auteur'], $_POST['contenu'], $_GET['target']);
        $commentaireManager = new CommentaireManager();
        $commentaireManager->insert($commentaire);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $_GET['target']);

    }

    public function renderUpdate($id){
        $commentaireManager = new CommentaireManager();
        $commentaire = $commentaireManager->selectById($id);
        require 'Vue/updateFormComment.php';
    }
    public function update($id){
        $commentaire = new Commentaire($id, "Anonymous", $_POST['contenu'], 0);
        var_dump($commentaire);
        $commentaireManager = new CommentaireManager();
        $commentaireManager->update($commentaire);
        $commentaire = $commentaireManager->selectById($id);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $commentaire->getArticleId());
    }
    public function renderDelete($id){
        $commentaireManager = new CommentaireManager();
        $commentaire = $commentaireManager->selectById($id);
        require 'Vue/deleteFormComment.php';
    }
    public function delete(){
        $commentaireManager = new CommentaireManager();
        $commentaire = $commentaireManager->selectById($_GET['target']);
        $commentaireManager->delete($_GET['target']);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $commentaire->getArticleId());

    }
}
?>