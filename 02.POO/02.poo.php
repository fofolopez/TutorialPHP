<?php

#CLASE
# Es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad

class Automovil {
    
    #Propiedades
    public $marca;
    public $modelo;
    
    #Metodos
    public function mostrar(){
        echo "<p>Hola soy un $this->marca, $this->modelo</p>";
    }
}

#Objeto
$carro = new Automovil();
$carro -> marca = "Hiunday";
$carro -> modelo = "Elantra";
$carro -> mostrar();

$sedan = new Automovil();
$sedan -> marca = "Toyota";
$sedan -> modelo = "Corolla";
$sedan -> mostrar();

# Principios de POO
# Abstraccion: Nuevos tipos de datos
# Encapsulacion: Organizar el código en grupos lógicos
# Ocultamiento: Ocultar detalles de implementación y exponer solo los detalles necesarios

