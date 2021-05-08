<?php
function comprobarPrimo($primo){
for($numeroChequeado = 2; $numeroChequeado < $primo; $numeroChequeado++){
if ($primo % $numeroChequeado == 0){
return false;
}
}
return true;
}
echo "2"." ";
for($numeroChequeado = 3; $numeroChequeado <= 1000; $numeroChequeado++){
if(comprobarPrimo($numeroChequeado)){
echo $numeroChequeado." ";
}
}
?>