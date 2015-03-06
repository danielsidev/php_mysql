<?php

class DAO {
  
     protected $db ;
     private   $host="localhost";//seu host
     private   $dbname="agenda";//o nome do seu banco
     private   $user="";//seu usuário
     private   $senha="";//sua senha
     
    public function __construct() {

        try {
            $con = $this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user, $this->senha);
            if (!$con) {
                throw new Exception("Não foi possível conectar ao banco!");
            }
        } catch (Exception $e) {
            echo $e->getMessage() . "<br>Error na linha:  ";
            echo "<b>" . $e->getLine() . "</b>";
            $this->db = null;
        }
    }
    
    public function fechar(){
         $this->db = null;
        
    }

}


 ?>
