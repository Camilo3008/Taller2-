<?php
$año = intval(readline("Ingresar año: ")); 

/* if($año %400 == 0):
    echo "El año si es biciesto"; 


else: 
    $estado = (($año %4 == 0 and $año %100 != 0 ) or ($año %400 == 0)) ? "El año es bisiesto " : "El año no es bisiesto"; 
    echo "$estado";

endif;
 */

$estado = (($año %4 == 0 and $año %100 != 0 ) or ($año %400 == 0)) ? "El año es bisiesto " : "El año no es bisiesto"; 
echo "$estado";
?>