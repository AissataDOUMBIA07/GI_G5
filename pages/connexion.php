<?php
try {
    $PDO = new PDO("mysql:host=localhost;dbname=agence_immobiliere", "root", "");
    // set the PDO error mode to exception
    // $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion reussie avec succès !!!";
  } catch(PDOException $e) {
      echo "Ne partez pas à la maison.";
    echo "Connection failed: " . $e->getMessage();
  }
?>