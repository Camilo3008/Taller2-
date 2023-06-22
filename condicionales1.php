<?php
$num = intval(readline("Ingrese un numero: "));


if($num == 0):
    echo "El numero ingresado es igual a cero";

else:
    $result = ($num >0 )? "el numero es positivo":"el numero es negativo";

    echo"$result";
endif;
?>


