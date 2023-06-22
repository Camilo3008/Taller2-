<?php
$monto = intval(readline("Ingrese su monto: "));

if ($monto >= 1000):
   $total = $monto * 0.9;
   echo "se hizo un descuento del 10%, el total a pagar es de: $total";

elseif($monto >= 500):
    $total = $monto * 0.95;
    echo"se hizo un descuento del 5%, el total a pagar es de: $total";
else: 
    echo "No aplica descuento, el total a pagar es de: $monto"; 

endif;
?>