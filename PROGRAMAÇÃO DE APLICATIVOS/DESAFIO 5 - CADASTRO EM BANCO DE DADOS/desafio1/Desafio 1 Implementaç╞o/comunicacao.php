<?php

abstract class comunicacao
{
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $dbname = "joaootario";
    public string $password = "";
    public int $port = 3306;
    public object $connect;

    public function connect(){

        try{

            $this->connect = new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user,$this->password); 
            echo "foi";
            return $this->connect;
        }
        catch(Exception $err){
        echo 'erro de conexão'.$err;
    }
    }
}
?>