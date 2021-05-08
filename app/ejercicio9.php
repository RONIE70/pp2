<?php
/*mostrar si un número es primo*/



$numeroIngresado=3;

for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
{
	if($numeroIngresado%$numeroAnterior==0)
	{
		break;
	}
}
if ($numeroAnterior<$numeroIngresado)
{
	echo "$numeroIngresado no es primo";
}
else
{
	echo "$numeroIngresado es primo";
}
?>