<?php
//echo "<h3>php 2do 2da</h3>";
//include_once."ejercicio1.php";

//$contador=0; defino la variable arriba
require "ejercicio1.php";
//include."ejercicio1.php";
//$miNombre=33.5;

$miNombre="Paula";
//var_dump($miNombre);
mostrar($miNombre);
//echo "llegue";

$contador=0;//1er paso, una vez fuera while
/*while($contador<10) //2do paso, logica 10 vueltas
{
	$contador++;//3er paso cambio de la condicion
	echo "<br>contador :$contador";
}*/
while($contador<10) //2do paso, logica 10 vueltas
{
	echo "<br>contador :$contador";
	
	$contador++;
	
}

for($contador=0;$contador<10;$contador++)
{
	echo "<br>contador :$contador";
}

for($i=0;$i<10;$i++)
{
	echo "<br>i for :$i";
}
/*$i=0;
for (;;){
	//echo $i;
	if($i ==10){
		break;
	}
	$i++;
	echo $i;
}*/

?>