<?php

$np=97;
 
if(primo($np)){
echo " el numero $np es primo";
}
else {
	echo " el numero $np no es primo";
}

function primo($num){

if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
	return true;
}
if($num >= 8 ){
		if ($num%2==0 || $num%3==0 || $num%5==0) {
		return false;
		}
		}
if($num >= 8 ){
		if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
		return true;
		}
}
}
?>