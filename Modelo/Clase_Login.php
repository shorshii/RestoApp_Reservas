<?php
require_once "mysqol-login.php";
class Usuario{
    public $username;
    public $passwords;
  
    public function __construct($username=null, $passwords=null) {
        $this->username = $username;
        $this->passwords = $passwords;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPasswords() {
        return $this->passwords;
    }
    public function setUsername($username) {
        $this->username= $username;
    }
    public function setPasswords($passwords) {
        $this->passwords= $passwords;
    }
    public function Login(){ 
        $model = new Conexion(); //Creamos una conexion 
        $con = $model->get_conexion(); //Conectamos
        $sql = 'SELECT * FROM usuarios WHERE username=:username AND passwords=:passwords'; 
        $query=$con->prepare($sql);
        $query->execute(array(
        ':username' => $this->username, 
        ':passwords' => $this->passwords));
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $user = $this->username;
        $pass = $this->passwords;
        if($user == "admin" && $pass == "admin")
        {
            $_SESSION['username'] = $this->username; // Storing user session value
            header('Location: Listado_reservas.php');
            exit();
        }
        else
        {
            echo 'Datos Incorrectos';
        } 
        }        
}
 ?>