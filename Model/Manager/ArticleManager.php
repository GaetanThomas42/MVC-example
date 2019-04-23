<?php
class ArticleManager extends DbManager {

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll(){
        $query ='SELECT * FROM Article';
        $res = $this->bdd->query($query);
        $cars = [];
        foreach  ($res as $data) {
            $cars[] = new Article($data['id'], $data['titre'], $data['contenu'], $data['dateCreation']);
        }
        return $cars;
    }
    public function select($id){
        $query ='SELECT * FROM `article` WHERE id='.$id;
        $res = $this->bdd->query($query);
        $res -> execute();
        $data = $res -> fetch();
        $article = new Article($data['id'], $data['titre'],$data['contenu'], $data['dateCreation']);
        return $article;
    }

    public function insert(Article $article){
        $query = "INSERT INTO `article`(`titre`, `contenu`, `dateCreation`) VALUES  ('".$article->getTitre()."','".$article->getContenu()."','".$article->getDateCreation()."')";
        $res = $this->bdd->query($query);
        $res -> execute();
    }
    public function delete($id){
        $query = "DELETE FROM `article` WHERE id =$id";
        $res = $this->bdd->query($query);
        $res -> execute();
    }
    public function update($article){
        $query = "UPDATE `article` SET `titre`='".$article->getTitre()."',`contenu`='".$article->getContenu()."' WHERE id =".$article->getId();
        $res = $this->bdd->query($query);
        $res -> execute();
    }

}