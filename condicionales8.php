<?php

$letra = strval(readline("Ingresar letra: "));


if($letra == "a" or $letra =="e" or $letra =="i" or $letra == "o" or $letra == "u" ):
    echo "La letra ingresada es una vocal";

else:
    echo "la letra ingresada es una consonante";

endif;
?>