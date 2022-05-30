<?php
    include "connexion.php";
    // require '../index.php';
    // if (isset($_POST['id'])) {
        // $Id_client = $_POST["Id_client"];
        $lib = $_POST["libelle"];
        $type = $_POST["type"];
        $etat = $_POST["etat"];
        $surface = $_POST["surface"]; 
        $adresse = $_POST["adresse"]; 
        $image = $_POST["image"]; 
        $matricule = $_POST["matricule"]; 

        $sth=$PDO->prepare("
            INSERT INTO logement(libelle,type_log,etat,surface,adresse,image,Mat_propri)
            values(:libelle, :type_log, :etat, :surface, :adresse, :image, :Mat_propri)
        ");
            // $sth->bindParam(':Id_client', $Id_client);
            $sth->bindParam(':libelle', $lib);
            $sth->bindParam(':type_log', $type);
            $sth->bindParam(':etat', $etat);
            $sth->bindParam(':surface', $surface);
            $sth->bindParam(':adresse', $adresse);
            $sth->bindParam(':image', $image);
            $sth->bindParam(':Mat_propri', $matricule);
    
            $sth->execute();
            header('location:../pages/logement.php');
    // }
    
?>