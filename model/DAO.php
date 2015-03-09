<?php
/*******************************************************************
@A small web application in PHP 5. * OO to demonstrate how
@made the connection to the mysql (in this case the MySQL 5.5) and
@an example of generic CRUD with PDO.
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
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
