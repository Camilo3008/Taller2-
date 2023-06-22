<?php

$cantidad = intval(readline("Ingrese cantidad de camisas a comprar :"));

$valoruni = 100;



$descuento = (3<=$cantidad)?$valoruni*$cantidad*0.8:$valoruni*$cantidad*0.9;
echo" total a pagar es de $descuento";
?> 