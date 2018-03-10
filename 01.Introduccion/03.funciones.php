<?php

#funciones sin parametros
function saludo(){
    echo "hola"."<br>";
}

#funcion con parametros
function despedida($nombre) {
    echo "Adios $nombre"."<br>";
}

#funciones con retorno
function retorno($nombre) {
    return $nombre." 88 <br>";
}

saludo();
despedida("Adolfo");
echo retorno("Adolfo");