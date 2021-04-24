<?php

echo "Escriba donde quiere viajar: <br>";
echo "1-Bariloche 2-Ushuaia 3-Cataratas <br>";

$lugarEleg= rand (1,3);
echo "<br>";

echo "La opcion que ingresaste es: ".$lugarEleg;

switch ($lugarEleg) 
{

    case 1:
    case 2:

    echo " ╚ En este lugar hace frio ╚";

    break;

    default: 
    echo " ¶ En este lugar hace calor ¶ "; 
    break;

           
}

?>