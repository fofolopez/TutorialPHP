<?php


# if
$a = 5;
$b = 15;

if ($a > $b) {
    echo "a > b";
}
else if ($a == $b){
    echo "a = b";
}
else {
    echo "a < b";
}

echo "<br>";

#switch
$dia = "jueves";

switch ($dia) {
    case 'sabado':
        echo "voy a estudiar";
        break;
    
    case 'viernes':
        echo "dia de fiesta";
        break;
        
    default:
        echo "otro dia";
        break;
}

# do while ... while ... for