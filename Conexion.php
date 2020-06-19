<?php
 class Conexion{

     private $host= "localhost";
     private $user="root";
     private $pass = "";
     private $db = "proy";
     private $conect;

     public function __construct(){
         $connectString = "mysql:host=".$this->host.";dbname=".$this->db.";charset-utf8";
         try{ $this->conect =new PDO($connectString,$this->user,$this->pass);
         $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }catch (Exception $e){
             $this->conect="Error de Conexion";
            echo "ERROR: ".$e->getMessage();
         }
     }

     public function connect()
     {
        return $this->conect;
     }

     public function prepare(){
         return false;
     }
 }


?>