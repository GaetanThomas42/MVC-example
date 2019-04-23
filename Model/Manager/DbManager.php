<?php
    class DbManager{

        protected $bdd;

        public function __construct()
        {
            try
            {
                $this->bdd = new PDO('mysql:host=localhost;dbname=articlebdd;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>