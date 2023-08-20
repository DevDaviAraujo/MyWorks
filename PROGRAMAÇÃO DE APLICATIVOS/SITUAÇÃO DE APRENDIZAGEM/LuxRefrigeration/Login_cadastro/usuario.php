<?php
require_once("conn.php");

class usuario extends conn{

    public object $conn;
    public array $formData;

    public int $id;
    
    public function validar()
    {

        $this->conn = $this->connect();
        $query_usuario = "SELECT * FROM usuario WHERE email = '".$this->formData['email']."' AND senha = '".sha1($this->formData['senha'])."'";
        $login_usuario = $this->conn->prepare($query_usuario);
        
        $login_usuario->execute();

        $value = $login_usuario->fetchALL();

        return $value;

        if ($login_usuario->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function admin()
    {

        $this->conn = $this->connect();
        $query_usuario = "SELECT adm FROM usuario WHERE email = '".$this->formData['email']."' AND adm = 1";
        $login_usuario = $this->conn->prepare($query_usuario);
        
        $login_usuario->execute();

        $value = $login_usuario->fetchALL();

        return $value;

        if ($login_usuario->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }
   

    public function verificar(){
        $this->conn=$this->connect();
        $query2="SELECT * FROM usuario WHERE email='".$this->formData['email']."'";
        $verificausuario= $this->conn->prepare($query2);

        $verificausuario->execute();
        
        $value = $verificausuario->fetchAll();

        return $value;

    } 

    public function create(){
        $this->conn=$this->connect();
        $query="INSERT INTO usuario(email, senha) VALUES(:email, :senha)";
        $addusuario= $this->conn->prepare($query);
        $addusuario->bindParam(':email', $this->formData['email']);
        $addusuario->bindParam(':senha', sha1($this->formData['senha']));

        $addusuario->execute();

        if($addusuario->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
    public function list() :array
    {
        $this->conn = $this->connect();
        $query_freezer = "SELECT id FROM usuario WHERE email='".$this->formData['email']."'";
        $result_freezer = $this->conn->prepare($query_freezer);
        $result_freezer->execute();
        $retorno = $result_freezer->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
    public function view()
    {
        $this->conn = $this->connect();
        $query_freezer = "SELECT email FROM usuario WHERE id =:id LIMIT 1";
        $result_freezer = $this->conn->prepare($query_freezer);
        $result_freezer->bindParam(':id', $this->id);
        $result_freezer->execute();
        $value = $result_freezer->fetch();
        return $value;
    }
}

?>