<?php

class Conexion {
 
    public function conectar(){
        
        $dsn = "mysql:host=localhost;dbname=cursophp";
        $user = "desarrollo";
        $password = "desarrollo_2018";
        
        $link = new PDO($dsn, $user, $password);
        
        return $link;
    }
}

?>