<?php
class User{

    private $login;
    private $password;
    private $db;

    private $servername = 'localhost';
    private $username_b = 'root';
    private $password_b = '';
    private $database = 'memory';
    
    public function __construct(){
        try{
            $this->db = new PDO ("mysql:host=$this->servername;dbname=$this->database", "$this->username_b", "$this->password_b");
        }catch(PDOException $e){
            echo 'ERREUR DE CONNEXION: '. $e->getMessage();
        }
        }


}

$user = new User();
