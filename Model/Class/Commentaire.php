<?php


class Commentaire extends ArticleManager {

    private $id;
    private $auteur;
    private $contenu;
    private $articleId;

    public function __construct($id, $auteur, $contenu, $articleId){
        $this->id = $id;
        $this->auteur = $auteur;
        $this->contenu = $contenu;
        $this->articleId = $articleId;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
    public function getContenu(){
        return $this->contenu;
    }
    public function setContenu($contenu){
        $this->contenu = $contenu;
    }
    public function getArticleId(){
        return $this->articleId;
    }
    public function setArticleId($articleId){
        $this->articleId = $articleId;
    }
    public function getAll(){
        return parent::selectAll();
    }
}
