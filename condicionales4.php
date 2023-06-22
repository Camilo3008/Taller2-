<?php
$nota = intval(readline("Ingrese su nota final: "));

if($nota >= 90):
    echo "Sobresaliente";

else:
    $estado = ($nota >= 60 ) ? "Aprobado" : "Reprobado";
    echo "$estado";

endif;
?>