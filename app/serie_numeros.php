<?php
/*for ($numero = 1; $numero <= 10; $numero++) {
    if ($numero== 5) {
      echo "El script se para al llegar a 5";
      break;
    }
echo $numero . "<br /> ";
}*/


for ($numero=1; $numero <= 10; $numero++) {
    if ($numero == 5) {
      echo "¡Se omite la 5!<br />";
      continue;
    }
echo $numero . "<br /> ";
}

?>