<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataBase_G5";
try{
    $connect= new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password) ;
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    echo " la connection a été bien etabli au database DataBase_G5!";
} 
catch (PDOException $e) {
   echo "Erreur : " .$e->getmessage();
}
?>       