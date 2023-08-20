<?php

    abstract class conn
    {
        public string $db ="mysql"; // tipo de banco
        public string $host ="localhost"; // nome do host no caso local
        public string $user="root"; // padrão
        public string $password=""; // padrão
        public string $dbname="mobilia";
        public int $port=3306;
        public object $connect;

        public function connect(){
            try{
                $this->connect= new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user,$this->password);
                return $this->connect;
            }
            catch(Exception $err){
                    echo "Erro no sistema!🤬🤬🤬🤬".$err;
            }
        }
    }
?>