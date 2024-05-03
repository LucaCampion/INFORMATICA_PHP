<?php

function login($u, $p) {
  // Connessione al database
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  // Verifica della connessione
  if (!$conn) {
      $ret_msg = "Connessione fallita: "; // L'utente è autenticato con successo
      $ret_val = false; 
      return array($ret_val, $ret_msg);
      //die("Connessione fallita: " . mysqli_connect_error());
  }

  // Esegui la query per verificare le credenziali dell'utente
  $query = "SELECT * FROM utente WHERE username = '$u' AND password = '$p'";
  $result = mysqli_query($conn, $query);

  // Verifica se la query ha restituito risultati
  if (mysqli_num_rows($result) > 0) {
    $ret_msg = "Login riuscito. Benvenuto!"; // L'utente è autenticato con successo
    $ret_val = true; 
    //echo "Login riuscito. Benvenuto!"; // L'utente è autenticato con successo
  } else {
    $ret_msg = "Attenzione le credenziali non sono valide. Riprova."; // L'utente è autenticato con successo
    $ret_val = false; 
    //echo "Credenziali non valide. Riprova."; // L'utente non è autenticato
  }

  // Chiudere la connessione quando non è più necessaria
  mysqli_close($conn);
  return array($ret_val, $ret_msg);
}


//-------------------------------------
//-------------------------------------
//-------------------------------------


?>

