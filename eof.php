
<?php 
// Open a text file for reading purposes
$fh = fopen('/home/www/data/users.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) 
// lee el archivo con echo
echo fgets($fh);
// Close the file
fclose($fh);

/* 
 el archivo puede ser r lectura r+ lecturaescritura
 escritura w  creacion de archivo a, 

*/
?>