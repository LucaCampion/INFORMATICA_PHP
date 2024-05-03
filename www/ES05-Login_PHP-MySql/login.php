<?php
require 'function.php';
session_start(); // Avvia la sessione php.

// Costanti per la connessione al database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ES05_user');
define('DB_PASSWORD', 'mia_password');
define('DB_NAME', 'ES05');

$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";
$postreq = $_SERVER['REQUEST_METHOD'] == 'POST';

//Form di login
$html_form = <<<FORM
<form action="$_SERVER[PHP_SELF]" method="post">
  <label for="email"> </label><input type="text" name="email" placeholder="Email" required/><br />
  <label for="password"> </label><input type="password" name="password" placeholder="Password" required/><br />
  <input type="submit" value="Login" /><input type="reset" value="Cancel" />
</form>
FORM;


if ($postreq==true) {
  [$retval, $retmsg]= login($email, $password);
  if ($retval==true) {
    $html_out = $retmsg;
    //header("location: welcome.php");
  } else {
    $html_out = "<p class='error'>$retmsg</p>";
    $html_out .= $html_form;
    $html_out .= "Non hai un account? <a href='register.php'>Registrati adesso</a>.<br />";
    $html_out .= "Hai dimenticato la password? <a href='reset.php'>Resetta la password</a>.<br />";
    $html_out .= "<a href='index.php'>Torna alla Home Page</a>.<br />";    
  }
  
} else {
  $html_out = "<p class='error'>$errmsg</p>";
  $html_out .= $html_form;
  $html_out .= "Non hai un account? <a href='register.php'>Registrati adesso</a>.<br />";
  $html_out .= "Hai dimenticato la password? <a href='reset.php'>Resetta la password</a>.<br />";
  $html_out .= "<a href='index.php'>Torna alla Home Page</a>.<br />";  
}


?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  <h3>Pagina di login</h3>
  <?=$html_out?>        
</body>
</html>
