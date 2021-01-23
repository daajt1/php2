<?php

  // cuenta palabras en la frase de la 
  // variable sentence

    $sentence = "The rain in Spain falls mainly on the plain";

    $chart = count_chars($sentence, 1);
    foreach($chart as $letter=>$frequency)
        echo "Character ".chr($letter)." appears $frequency
times<br />";
?>

<?php
   // analiza la variable pathinfo con la
   // funcion pathinfo y subdivide el resultadocon con br

    $pathinfo = pathinfo('/home/www/htdocs/book/chapter10/index.html');
    printf("Dir name: %s <br />", $pathinfo['dirname']);
    printf("Base name: %s <br />", $pathinfo['basename']);
    printf("Extension: %s <br />", $pathinfo['extension']);
    printf("Filename: %s <br />", $pathinfo['filename']);
?>