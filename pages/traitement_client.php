<?php
    require "../connexion.php";
    if (isset($_POST['creer'])) {
        $nom=$_POST['Nom'];
        $prenom=$_POST['Prenom'];
        $contact=$_POST['Contact'];
        $adresse=$_POST['Adresse'];
        $password=['password'];
        $require=$PDO->query("INSERT INTO client(Nom, Prenom, Contact, Adresse, password) VALUES
            ('$nom', '$prenom', 'contact', '$adresse', '$password')");
            header("location:index.php?menu=menu_client&nous=details");
    }
?>