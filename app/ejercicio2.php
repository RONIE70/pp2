
<?php
/*De un numero ingresado positivo (de lo contrario informar que no se puede) mostrar todos los números desde el ingresado hasta el 0(cero). */

echo "Ingrese un numero: ";
echo $numero= rand (1,50);
echo "<br>";

$contador=0;

while($numero>0&&$contador<$numero) //2do paso, logica 10 vueltas
{
	echo "<br>contador :$contador";
	
	$contador++;	
}

?>