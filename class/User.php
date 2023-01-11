<?php
class User{

    private $login;
    private $password;
    private $db;
    private $data;

    private $servername = 'localhost';
    private $username_b = 'root';
    private $password_b = '';
    private $database = 'memory';
    
    // demmarer la connexion das le construct. 
    public function __construct(){
        try{
            $this->db = new PDO ("mysql:host=$this->servername;dbname=$this->database", "$this->username_b", "$this->password_b");
        }catch(PDOException $e){
            echo 'ERREUR DE CONNEXION: '. $e->getMessage();
        }
        }
        
    // Les getteurs. 
    public function getLogin($login){
        return $this->login;
    }
    public function getPassword($password){
        return $this->password;
    }
    
    // Check DB.
    public function verif_db($login){
        $data = $this->db->prepare("SELECT * FROM `users` WHERE login=?");
        $data->execute(["$login"]);
        return $data->fetchAll(PDO::FETCH_ASSOC);   // la methode return un objet, si il est vide le login n'existe pas. 
    }

    // register new login.
    public function register($login, $password){
        try{
        $req = $this->db->prepare("INSERT INTO `users` (`login`, `password`) VALUE (:login, :password)");
        $req->execute([":login" => "$login", ":password" => "$password"]);
    }catch (PDOException $e){
        echo 'ERREUR Register: '. $e->getMessage();
    }
    }

    // methode pour veriffier que le user est connecté.
    public function isConnected(){
        if(isset($_SESSION['login'])):
            return true;
        else: return false;
        endif;
    }

    // connected.
    public function connect($login, $password){

        $data = $this->verif_db($login);
        
        $exist = false;
        if (count($data) === 1):    
            $password_db = $data[0]['password'];
            if(password_verify($password, $password_db) === true):
                $exist = true;
            endif;
        endif;
        return $exist;
    }

    // deconnect
    public function deConnect(){
        $_SESSION = array();//Ecraser le tableau de session 
        session_unset(); //Detruit toutes les variables de la session en cours
        session_destroy();//Destruit la session en cours
        header('location: connexion.php');
    }




}
