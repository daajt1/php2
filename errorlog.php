<?php 

$letra = "sddssa";



throw new Exception();

try {
  
    if($letra.length != 4) {
        throw exception("Something bad happened");}
// Catch the thrown exception
} catch(Exception $e) {
    echo "error encontrado";
}

try {
    $fh = fopen("contacts.txt", "r");
    if (! $fh) {
        throw new Exception("Could not open the file!");
    }
} catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}


$fh = fopen("contacts.txt", "r");
try {
    if (! fwrite($fh, "Adding a new contact")) {
        throw new Exception("Could not open the file!");
    }
} catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
} finally {
    fclose($fh); }

    // clases ue identifica un lenguaje con una clave y un valor
    class MyException extends Exception {

        // constructor que inicia las variables lenguaje y
        // codigo de error
        function __construct($language, $errorcode) {
            $this->language = $language;
            $this->errorcode = $errorcode;
        }

        /* la variable error abre el archivo 
        el bucle foreach itera por cada error dentro de 
        una lista y lo relaciona el valor con su clave
        la funcion regresa un arreglo con con los codigos
        de error */ 
        function getMessageMap() {
            $errors = file("errors/{$this->language}.txt");
            foreach($errors as $error) {
                 list($key,$value) = explode(",", $error, 2);
                 $errorArray[$key] = $value;
            }
            return $errorArray[$this->errorcode];
        }
    }
?> 