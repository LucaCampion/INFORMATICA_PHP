<?php
// Costanti per la connessione al database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ES05_user');
define('DB_PASSWORD', 'mia_password');
define('DB_NAME', 'ES05');

// Connessione al database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verifica della connessione
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

echo "Connessione al database riuscita";
$email = $_POST['email'];
$password = $_POST['password'];
$query="INSERT INTO utente (UserID, Username, Password) VALUES (NULL, 'utente', 'prova');";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head><title>Registrazione</title></head>
<body>
  <h3>Pagina di registrazione</h3>
  <?=$errmsg?>
  <form action="login.php" method="post">
    <label>Email <input type="text" name="email" /></label><br />
    <label>Password <input type="password" name="password"/></label><br />
    <input type="submit" value="Login" /><input type="reset" value="Cancel" />
  </form>
</body>
</html>