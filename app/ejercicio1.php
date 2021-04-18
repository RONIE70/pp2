<?php

echo " Su edad es: ";

echo $edad= rand (1,70);

echo "<br>";

if ($edad<=18)
{
	echo $edad. " años es menor";
}
else 
{
	echo $edad. " años es mayor";
}

?>