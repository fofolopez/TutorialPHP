<?php

class Producto {
    public $nombre;
    public $precio;
    protected $estado;
    
    protected function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function ver(){
        echo "Hola soy el producto: ".$this->nombre."<br/>";
        echo "Tengo un precio de: ".$this->precio."<br/>";
        echo "Me encuentro con un estado de: ".$this->estado."<br/>";
    }
    
    function __construct(){
        $this->setEstado("en uso");
    }
    
    function __destruct(){
        $this->setEstado("liberado");
        echo "El objeto ha sido destruido <br/>";
        echo "El objeto ha sido:".$this->estado."<br/>";
    }
}

$_producto = new Producto();
$_producto->nombre = "Leche Dos Pinos";
$_producto->precio = 1600;
$_producto->ver();

echo "<br/><br/>";

$_producto->ver();