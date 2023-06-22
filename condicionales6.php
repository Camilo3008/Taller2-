<?php

$calificacion = intval(readline("Ingresar calificacion: "));

if ($calificacion >= 90 and $calificacion <=100 ):
    echo "EXCELENTE";

elseif($calificacion >= 80 and $calificacion <=89 ):
    echo "BUENO"; 

elseif($calificacion >= 70 and $calificacion <=79 ):
    echo "REGULAR";

elseif($calificacion >= 60 and $calificacion <=69 ):
    echo"APROBADO";

elseif($calificacion >= 0 and $calificacion <=59 ):
    echo "REPROBADO";

else:
    echo"Datos ingresados incorrectos.";

endif;
?>