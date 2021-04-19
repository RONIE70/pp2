<?php

echo "Primer número: ";
echo $num1= rand (1,100);
echo "<br>";

echo "Segundo número: ";
echo $num2= rand (1,100);
echo "<br>";

echo "Tercer número: ";
echo $num3= rand (1,100);
echo "<br>";


if ($num1>$num2 && $num1>$num3)
{
	echo "<br>";
	echo $num1. " : ES EL MAYOR";
}
else if ($num2>$num1 && $num2>$num3)
{
	echo "<br>";
	echo $num2. " : ES EL MAYOR";
}

else 
{
	echo "<br>";
	echo $num3. " : ES EL MAYOR";
}

?>