<?php
    include "connexion.php";

    // $id_demande = $_POST["id_demande"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // $id_log = $_POST["id_log"];

    $sth = $PDO->prepare("
            INSERT INTO demande_logement(nom_client, prenom_client, telephone, email, message, id_log)
            VALUES(:nom_client, :prenom_client, :telephone, :email, :message, :id_log)");
            // $sth->bindParam(':id_demande',$id_demande);
            $sth->bindParam(':nom_client',$nom);
            $sth->bindParam(':prenom_client',$prenom);
            $sth->bindParam(':telephone',$telephone);
            $sth->bindParam(':email',$email);
            $sth->bindParam(':message',$message);
            $sth->bindParam(':id_log',$id_log);
            $sth->execute();
        header("location:../pages/locat.php");
?>