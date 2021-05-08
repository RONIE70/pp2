<?php
$numeroInicial = 1; // Desde
$numeroRecorrido = 1000;// Hasta

echo "Números primos del ";echo $numeroInicial; echo " al "; echo $numeroRecorrido;

for ($numeroElegido = $numeroInicial; $numeroElegido  < $numeroRecorrido; $numeroElegido ++)
{
	$numeroDivisor = 0; // Número de divisores
	for ($numeroInicial = 1; $numeroInicial <= $numeroElegido ; $numeroInicial++) // Desde 1 hasta el valor que tenga $numeroElegido
	{
		if($numeroElegido %$numeroInicial == 0) // $numeroElegido es un divisor de $numeroInicial
		{
			$numeroDivisor = $numeroDivisor + 1; // Agregamos un divisor mas.
		}
	}
			if($numeroDivisor == 2 or $numeroElegido == 1)// Si tiene 2 divisores ó es 1 --> Es primo
			{
				echo "<br>";
				echo $numeroElegido;
			}
}
?>