<?php

$num = intval(readline("Ingresar numero: "));


if ($num == 2 or $num == 3 or $num == 5 ):
    echo"Es un numero primo";

else:
$clas = ($num  %2 != 0 and $num %3 != 0 and $num %5 != 0 and $num %1 == 0  and $num %$num == 0 ) ? "es un numero primo" : "no es un umero primo";
    echo "$clas";
endif;


?>