<?php

$numeroRecorrido=1000;

for ($numeroAnterior=2;$numeroAnterior<$numeroRecorrido;$numeroAnterior++)
{

/*}

for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
{*/

if($numeroRecorrido%$numeroAnterior==0)
	{
		break;
	}
}

if ($numeroAnterior<$numeroRecorrido)
	{
	echo "<br>$numeroAnterior";
	
	$numeroAnterior++;	

}
?>