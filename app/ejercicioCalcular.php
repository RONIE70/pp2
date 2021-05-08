<?php

$numero1= 4;//rand (1,20);
$numero2= 5;//rand (1,20);
$operador="/"; //rand (1,3);

echo "Ingrese el primer numero: ".$numero1;
echo "<br>Ingrese el segundo numero: ".$numero2;
echo "<br>Ingrese la operacion aritmetica:1-Sumar 2- Division <br> Su eleccion es: ".$operador;

calcular($numero1,$operador,$numero2);

function sumar ($numero1,$numero2){
 $suma= $numero1 + $numero2;
 return $suma;
}


function dividir($numero1,$numero2){
	if (retornarSiEsCero($numero2)==true)
    {
		$division="No se puede dividir por cero";
	}
	else
    {
    $division=$numero1/$numero2;
    return $division;
   }
}


function retornarSiEsCero($numeroIngresado){
   if($numeroIngresado==0){
    $devolucion=true;
   }
   else
   {
    $devolucion=false;
   }
   return $devolucion;
}

function calcular($numero1,$operador,$numero2) {
	switch ($operador) 
{

    case "+": echo "<br>Suma: ".mostrarResultado(sumar($numero1,$numero2)) ;
    break;
    
    case "/": echo "<br>Dision: " .mostrarResultado(dividir($numero1,$numero2));

    break;

    default: 
    echo " ¶ OPERACION NO ADMITIDA ¶ "; 
    break;

   }        
}

function mostrarResultado ($resultadoIngresado){
    return $resultadoIngresado;
}

?>