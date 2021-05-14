<?php

$temperatura = rand (1,200);
$conversor="C"; //rand (1,3);


echo "Ingrese la temperatura en FARENHEIT: ".$temperatura;
echo "<br>Ingrese la opcion :<br>F = FARENHEIT <br> C = CELSIUS";
echo " <br>La opcion elegida es: ".$conversor;

transformar ($temperatura,$conversor);

function FarenheitaCelsius ($temperatura)
{
 return ($temperatura - 32) / 1.8;
}


function CelsiusaFarenheit ($temperatura)
{
 return ($temperatura * 1.8) /32;
}


function mostrarTemperatura ($temperatura , $conversor)
{
   if ($temperatura == "operación no permitida")
    {
      echo "ERROR COLOQUE UNA OPCION VALIDA";
    }
      else 
    {
      echo "<h1> RESPUESTA <h1>";
      echo " CONVERSION = $temperatura $conversor";
      echo "<h4> gracias por su consulta MEDICLINE <h4>";
    }
}


function transformar ($temperatura , $conversor) 
{
  
  switch ($conversor) 
{

    case 'C': 
            $resultado = FarenheitaCelsius ($temperatura);
    
            break;
    
    case 'F': 
            $resultado = CelsiusaFarenheit ($temperatura);

            break;

    default: 
          $resultado = "operacion no permitida";
    
           break;

   }        

      mostrarTemperatura($resultado, $conversor);
}

?>