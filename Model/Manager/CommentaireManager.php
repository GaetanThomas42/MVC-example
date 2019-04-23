<?php
class CommentaireManager extends DbManager {

    public function __construct(){
        parent::__construct();
    }

    public function selectAll(){
        $query ='SELECT * FROM commentaire';
        $res = $this->bdd->query($query);
        $comments = [];
        foreach  ($res as $data) {
            $comments[] = new Commentaire($data['id'], $data['auteur'], $data['contenu'], $data['articleId']);
        }
        return $comments;
    }
    public function selectById($id){
        $query ='SELECT * FROM `commentaire` WHERE id='.$id;
        $res = $this->bdd->query($query);
        $res -> execute();
        $data = $res -> fetch();
        $comment = new Commentaire($data['id'], $data['auteur'], $data['contenu'], $data['articleId']);
        return $comment;
    }
    public function selectByArticleId($articleId){
        $query ='SELECT * FROM `commentaire` WHERE articleId='.$articleId;
        $res = $this->bdd->query($query);
        $comments = [];
        foreach  ($res as $data) {
            $comments[] = new Commentaire($data['id'], $data['auteur'], $data['contenu'], $data['articleId']);
        }
        return $comments;
    }

    public function insert($commentaire){
        $query = "INSERT INTO `commentaire`(`auteur`, `contenu`,`articleId`) 
                                VALUES  ('". $commentaire->getAuteur()."',
                                         '". $commentaire->getContenu()."',
                                          ". $commentaire->getArticleId().")";
        $res = $this->bdd->query($query);
        $res -> execute();
    }
    public function delete($id){
        $query = "DELETE FROM `commentaire` WHERE id =$id";
        $res = $this->bdd->query($query);
        $res -> execute();
    }
    public function update($commentaire){
        $query = "UPDATE `commentaire` 
                            SET `contenu`='" .$commentaire->getContenu() ."' 
                            WHERE id =". $commentaire->getId();
        $res = $this->bdd->query($query);
        $res -> execute();
    }
}