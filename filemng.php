<?php 



echo "april".(checkdate(4,12,2020)? 'valid': 'invalid')
echo "today is".date("F d, Y");

$time = gettimeofday();
$UTCoffset = $time['minuteswest'] / 60;
printf("Server location is %d hours west of UTC.", $UTCoffset);

Array (
    [sec] => 1274728889
    [usec] => 619312
    [minuteswest] => 240
    [dsttime] => 1
  )

  $lastmod = date("F d, Y h:i:sa", getlastmod());
echo "Page last modified on $lastmod";
?>

<?php
    // If the name field is filled in
    if (isset($_POST['name']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       printf("Hi %s! <br>", $name);
       printf("The address %s will soon be a spam-magnet! <br>", $email);
    }
?>
<form action="subscribe.php" method="post">
    <p>
        Name:<br>
        <input type="text" id="name" name="name" size="20" maxlength="40">
    </p>
    <p>
        Email Address:<br>
        <input type="text" id="email" name="email" size="20"
maxlength="40">
    </p>
    <input type="submit" id="submit" name = "submit" value="Go!">
</form>

<?php
    // Assign GET variable
    $cookie = $_GET['cookie'];
    // Format variable in easily accessible manner
    $info = "$cookie\n\n";
    // Write information to file
    $fh = @fopen("/home/cookies.txt", "a");
    @fwrite($fh, $info);
    // Return to original site
    header("Location: http://www.example.com");
?>


<?php
    if (isset($_POST['submit']))
    {
        echo "You like the following languages:<br>";
        if (is_array($_POST['languages'])) {
          foreach($_POST['languages'] AS $language) {
              $language = htmlentities($language);
              echo "$language<br>";
          }
      }
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   What's your favorite programming language?<br> (check all that
apply):<br>
   <input type="checkbox" name="languages[]" value="csharp">C#<br>
   <input type="checkbox" name="languages[]" value="javascript">JavaScript
<br>
   <input type="checkbox" name="languages[]" value="perl">Perl<br>
   <input type="checkbox" name="languages[]" value="php">PHP<br>
   <input type="submit" name="submit" value="Submit!">
</form>

<?php 

// If the username or password isn't set, display the authentication

if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_
PW'])) {
    header('WWW-Authenticate: Basic Realm="Authentication"');
    header("HTTP/1.1 401 Unauthorized");

} else {
    echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />";
    echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
}
?>