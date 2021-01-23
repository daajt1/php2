<?php
    // saca asteriscos por motivos de seguridad
    $ccnumber = "1234567899991111";
    echo substr_replace($ccnumber,"************",0,12);
?>

