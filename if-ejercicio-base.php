<?php
$numComputadores = intval(readline("Ingrese el numero de computadores a comprar: ")); 

$_PRECIO = 700; 

$total = $numComputadores*$_PRECIO;

if($numComputadores < 5 ):
    
    $descuento = $total * 0.1; 

    $totalpagar = $total - $descuento;

    echo"El total a pagar es de $totalpagar \n";

    echo "Por la compra de $numComputadores computadores.\n Su valor total es : $total\nSe realizo un descuento del 10% equivalente a :$descuento \n total a pagar es de: $totalpagar ";
endif;

if($numComputadores >=5 and  $numComputadores<10):

    $descuento2 = $total * 0.2; 

    $totalpagar2 = $total - $descuento2; 

    echo "Por la compra de $numComputadores computadores.\n Su valor total es : $total\nSe realizo un descuento del 20% equivalente a :$descuento2 \n total a pagar es de: $totalpagar2 ";
endif;

if($numComputadores >= 10 ):

    $descuento3 = $total * 0.4;
    
    $totalpagar3 = $total - $descuento3;

    echo "Por la compra de $numComputadores computadores.\n Su valor total es : $total\nSe realizo un descuento del 40% equivalente a :$descuento3 \n total a pagar es de: $totalpagar3 ";
endif;
?>