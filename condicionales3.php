<?php

$num = intval(readline("Ingrese un numero: "));

$resultado = ($num %3 == 0 and $num %5 == 0 ) ? "El numero ingresado es divicible por 3 y por 5" : "El numero ingresado no es divisible por 3 y por 5 ";

echo "$resultado";

?>