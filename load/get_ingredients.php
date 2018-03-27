<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  require_once('../../../fl_core/autentication.php');
  // $host = "localhost";
  // $login = "root";
  // $pwd = "";
  // $db = "banquet_lacavallerizza";

  $conn = mysqli_connect($host,$login,$pwd,$db);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id, codice_fornitore, formato, unita_di_misura_formato, valore_di_conversione, prezzo_unitario, iva FROM fl_listino_acquisto";
  $result = mysqli_query($conn, $sql);
 

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $json[] = $row;
    }
    echo json_encode($json);
  } else {
    echo "0 resultati";
  }

  mysqli_close($conn);