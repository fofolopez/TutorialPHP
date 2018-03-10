<?php

# imperativo

$carro1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
$carro2 = (object)["marca"=>"Hiunday", "modelo"=>"Elantra"];

function mostrar($carro) {
    echo "<p>Hola soy un $carro->marca, $carro->modelo</p>";
}

mostrar($carro1);
mostrar($carro2);