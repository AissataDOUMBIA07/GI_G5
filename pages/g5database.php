<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $g5database = new PDO ("mysql:host=$servername", $username, $password) ;
    $g5database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    echo " la connection a été bien etabli!";
} 
catch (PDOException $e) {
   echo "Erreur : " .$e->getmessage();
}
?>