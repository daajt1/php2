<?php
  
    // verifica que ele tamaño del password
    // no sea menor que 10 o sino es invalido

   $pswd = "secretpswd";
    if (strlen($pswd) < 10)
        echo "Password is too short!";
    else
        echo "Password is valid!";
?>

<?php
    // verifica que no haya solo numeros
    // en el password
    $password = "3312345";
    if (strspn($password, "1234567890") == strlen($password))
        echo "The password cannot consist solely of numbers!";
?>

<?php
    $title = "O'Malley wins the heavyweight championship!";
    echo strtolower($title);
    echo strtoupper($title);
    echo ucwords($title);
?>

<?php
    $entities = get_html_translation_table(HTML_ENTITIES);
    $translate = array_flip($entities);
    $string = "La pasta &egrave; il piatto pi&ugrave; amato in Italia";
    echo strtr($string, $translate);
?>