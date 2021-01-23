<?php
  $userfile = file_get_contents('users.txt');
  $users = explode("\n", $userfile);

 foreach ($users as $user) {
        // Parse the line, retrieving the name and e-mail address
        list($name, $email) = explode(' ', $user);
        // Output the formatted name and e-mail address
        printf("<a href='mailto:%s'>%s</a> <br />", $email, $name);
    }
?>

<?php
    // Read the file into an array
    $users = file('/home/www/data/subscribers.csv');
    foreach ($users as $user) {
        // Break each line of the file into three parts
        list($name, $email, $phone) = explode(',', $user);
        // Output the data in HTML format
        printf("<p>%s (%s) Tel. %s</p>", $name, $email, $phone);
    }
?>

<?php
    // Build list of acceptable tags
    $tags = '<h2><h3><p><b><a><img>';
    // Open the article, and read its contents.
    $fh = fopen('article.html', 'r');
    while (! feof($fh)) {
        $article .= fgetss($fh, 1024, $tags);
    }
    // Close the handle
    fclose($fh);
    // Open the file up in write mode and output its contents.
    $fh = fopen('article.html', 'w');
    fwrite($fh, $article);
    // Close the handle
    fclose($fh);
?>

<?php

// Verifica con un valor de entrada una condicion
echo 'Are you sure you want to delete? (y/n) ';
$input = fgetc(STDIN);
if (strtoupper($input) == 'Y')
{
    unlink('users.txt');
}
?>

<?php
    $fh = fopen('socsecurity.txt', 'r');
    // Parse each SSN in accordance with integer-integer-integer format
    while ($user = fscanf($fh, "%d-%d-%d")) {
        // Assign each SSN part to an appropriate variable
        list ($part1,$part2,$part3) = $user;
       
printf("Part 1: %d Part 2: %d Part 3: %d <br />", $part1, $part2,
$part3);
     }
   fclose($fh);
?>

<?php
    $dh = opendir('/usr/local/apache2/htdocs/');
    while ($file = readdir($dh))
        echo "$file <br />";
    closedir($dh);
?>