<?php
    include "connexion.php";
    // require '../index.php';
    // if (isset($_POST['id'])) {
        // $Id_client = $_POST["Id_client"];
        $Nom = $_POST["nom"];
        $Prenom = $_POST["prenom"];
        $Contact = $_POST["contact"];
        $Adresse = $_POST["adresse"]; 
        $Password = $_POST["password"]; 

        $sth=$PDO->prepare("
            INSERT INTO client(Nom,Prenom,Contact,Adresse,password)
            values(:Nom, :Prenom, :Contact, :Adresse, :password)
        ");
            // $sth->bindParam(':Id_client', $Id_client);
            $sth->bindParam(':Nom', $Nom);
            $sth->bindParam(':Prenom', $Prenom);
            $sth->bindParam(':Contact', $Contact);
            $sth->bindParam(':Adresse', $Adresse);
            $sth->bindParam(':password', $Password);
    
            $sth->execute();
            header('location:../pages/client.php');
    // }
    
?>