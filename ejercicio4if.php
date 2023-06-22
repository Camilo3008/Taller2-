<?php
$edad = intval(readline("Ingrese  su edad: ")); 

if($edad >= 18 ):
    $mayorEdad = readline("Tienes licencia de conducir  si/no:");

        if($mayorEdad == "si"):
        echo"puedes conducir.";

            elseif($mayorEdad == "no"):
            echo"Debes obtener una licencia de conducir primero";

            elseif($mayorEdad != "no" and $mayorEdad != "si"):
            echo"Ingresar datos correspondientes";
        endif;
else:
echo"No puedes conducir.";

endif;




?>