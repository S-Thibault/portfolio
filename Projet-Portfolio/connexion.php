<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dataBaseName = "portfolio";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dataBaseName", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }

  catch(PDOException $e) {
    echo "Connection failed / Echec de la connexion : " . $e->getMessage();
  }

  $conn = null;


?>
