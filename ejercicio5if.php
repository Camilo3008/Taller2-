<?php
$num1 = intval(readline("Ingresar numero 1: \n"));
$num2 = intval(readline("Ingresar numero 2: \n"));

if( $num1 >10 and $num2 >10):
    echo"Los numeros ingresados son mayores a 10";

elseif( $num1 >10 and $num2 <10):
    echo"Uno de los numeros ingresados es mayor a 10";

elseif( $num1 <10 and $num2 <10):
    echo"Ninguno de los numeros ingresados son mayores a 10";
endif;

?>