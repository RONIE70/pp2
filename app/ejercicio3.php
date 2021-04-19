<?php

echo "El mes número: ";

echo $mes= rand (1,12);

echo "<br>";

echo " Corresponde a la estación: ";

if ($mes==12||$mes==1||$mes==2||$mes==3)
{
	echo " VERANO";
}
else if($mes==4||$mes==5||$mes==6)
{
	echo " OTOÑO";
}

else if($mes==7||$mes==8)

{
	echo " INVIERNO";
}
else 
{
	echo " PRIMAVERA";
}

?>