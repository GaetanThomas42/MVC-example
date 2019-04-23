<?php
class CommentaireController{
    public function renderComments($id){
        $commentManager = new CommentaireManager();
        $commentaires = $commentManager->selectByArticleId($id);
        require 'Vue/commentaireVue.php';
    }
    public function renderInsert($id){
        require 'Vue/insertFormComment.php';
    }
    public function insert($id){
        $comment = new Commentaire(null, $_POST['auteur'], $_POST['contenu'], $id);
        $commentManager = new CommentaireManager();
        $commentManager->insert($comment);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $_GET['target']);
    }
    public function renderUpdate($id){
        $commentManager = new CommentaireManager();
        $comment = $commentManager->selectById($id);
        require 'Vue/updateFormComment.php';
    }
    public function update($id){
        $comment = new Commentaire($id, "Anonymous", $_POST['contenu'], 0);
        $commentManager = new CommentaireManager();
        $commentManager->update($comment);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $commentManager->selectById($id)->getArticleId());
    }
    public function renderDelete($id){
        $commentManager = new CommentaireManager();
        $comment = $commentManager->selectById($id);
        require 'Vue/deleteFormComment.php';
    }
    public function delete(){
        $commentManager = new CommentaireManager();
        $commentManager->delete($_GET['target']);
        header('Location: http://localhost/exempleMVC/index.php?controller=comment&action=select&target=' . $commentManager->selectById($_GET['target'])->getArticleId());
    }
}
?>