<?php
    include "connectdatabaseg5.php";
    $type_log = $_POST["type_log"];
    $etat = $_POST["etat"];
    $surface = $_POST["surface"];
    $adresse = $_POST["adresse"];
    $disponibilite = $_POST["disponibilite"];
    $id_propri = $_POST["id_propri"];

    try{

        
    $sth = $connect->prepare("
            INSERT INTO logement( type_log, etat, surface, adresse, disponibilite, id_propri)
            VALUES(:type_log, :etat, :surface, :adresse, :disponibilite, :id_propri)");
            $sth->bindParam(':type_log',$type_log);
            $sth->bindParam(':etat',$etat);
            $sth->bindParam(':surface',$surface);
            $sth->bindParam(':adresse',$adresse);
            $sth->bindParam(':disponibilite',$disponibilite);
            $sth->bindParam(':id_propri',$id_propri);
            $sth->execute();

            echo "logement ajouter avec succès!";

             
}catch (PDOException $e) {
    echo "Erreur : " .$e->getmessage();
 }      

    //    header("location:ajout_client.html");
?>
