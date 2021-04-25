<?php
/* 7-(IF) de tres números ingresados indicar el número del medio o informar si NO hay número del medio, 
Ej:   
3,5,7   número del medio =5 
3,7,5	número del medio =5 
5,3,7	número del medio =5 
5,7,3	número del medio =5 
7,5,3	número del medio =5 
7,3,5	número del medio =5 
7,7,7 no tiene  
7,7,5 no tiene 
5,7,5 no tiene
*/

	echo " SELECCIONAMOS 3 NUMEROS AL AZAR <br> ";
	$num1 = rand(1,100);
	$num2 = rand(1,100);
	$num3 = rand(1,100);
	
	echo " El numero 1 es : $num1 <br> ";
	echo " El numero 2 es : $num2 <br> ";
	echo " El numero 3 es : $num3 <br> <br>";
  
	if ($num1>$num2) {
        $numMedio=$num1;
        $xtem =$num2;
    } else 
    {
       $numMedio=$num2;
        $xtem =$num1;
    }
    	if ($numMedio > $num3) 
    {
        $numMedio = $num3;
    }
    	if ($numMedio < $xtem) 
    {
        $numMedio = $xtem;
    }
    	if ($num1==$num2&&$num2==$num3)
    {
		echo " no tiene";
	}

    	echo "El numero medio es : ".$numMedio;
    
  ?>