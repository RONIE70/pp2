<?php  

echo "Escribe tu edad: ";
echo $tuEdad= rand (1,80);
echo "<br>";

echo "La edad que ingresaste es: ".$tuEdad;

switch ($tuEdad) {
   
   case 1;
   case 2;
   case 3;
   case 4;
   case 5;
   case 6;
   case 7;
   case 8;
   case 9;
   case 10;
   case 11;
       
   echo "menos de 12 años: todavía eres un niño";
   break;
   
   case 13;
   case 14;
   case 15;
   case 16;
   case 17;
  
  echo " tienes entre 12 y 18 años: todavía eres un muy joven";
  break;
  
  default:
        echo " eres una persona mayor de edad";  
   }
?>