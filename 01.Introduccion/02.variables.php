<?php

# variable numerica
$numero = 5;
echo "Esta es una variable numerica: $numero";
echo "<br><br>";

# variable texto
$texto = 5;
echo "Esta es una variable texto: $texto";
echo "<br><br>";

# variable booleana 
$booleana = true;
echo "Esta es una variable numerica: $booleana";
echo "<br><br>";

# variable arreglo
$colores = array("rojo", "amarillo");
echo "Esta es una variable arreglo: $colores[0]";
echo "<br><br>";

#variable objeto
$carro = (object)["marca"=>"Hiunday", "modelo"=>"Elantra"];
echo "Esta es una variable objeto: $carro->marca";
echo "<br><br>";
var_dump($carro);
