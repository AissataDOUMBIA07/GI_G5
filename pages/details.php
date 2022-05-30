<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Lien css -->
   <link rel="stylesheet" href="../css/agence.css">
   <!-- Liens bootstrap -->
   <link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
   <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
   <link rel="stylesheet" href="../bootstrap5/js/bootstrap.js">
   <link rel="stylesheet" href="../bootstrap5/js/bootstrap.min.js">
   <script src="../bootstrap5/js/bootstrap.bundle.js"></script>
   <!-- Liens icones -->
   <link rel="stylesheet" href="../icones/fontawesome-free/css/all.css">
  <title> Client </title>
</head>
<body>
     <!-- Le menu principal -->
    <div class="">
        <nav class="">
            <ul class="nav-ul">
                <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo1">
                <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
                <li class="nav-li"><a class="dropdown-item" href="../pages/contact.php">Contact</a></li>
                <button class="btn-connexion" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal01">Se connecter</button>
            </ul>
        </nav>
        <p id="det">DETAILS</p>
        <div class="container">
            <div class="row ligne-details">
                <div class="col-lg-6 image-details">
                    <?php 
                        echo '<img class="image" src="'.$result['image'].'" style="height: 250px;">';
                    ?>
                </div>
                <div class="col-lg-6 text-details">
                <?php
                        if (isset($_POST['details'])) {
                            $id=$_POST['id'];
                            $sth=$PDO->query("SELECT * FROM logement WHERE id_log='$id'AND etat= 'Disponible'");
                            if ($result=$request->fetch()) {
                                echo '<p><h5><span>le nom de logement est:</span> '.$result['libelle'].'</h5></p>';
                                echo '<p><h5><span> Le type Logement est:</span> '.$result['type_log'].'</h5></p>';
                                echo '<p><h5><span>Etat de logement est:</span> '.$result['etat'].'</h5></p>';
                                echo '<p><h5><span>Surface est:</span> '.$result['surface'].'</h5></p>';
                                echo '<p><h5><span>Adresse du logement est:</span> '.$result['adresse'].'</h5></p>';
                            }
                        }
                ?>
                    <!-- <p><span>Type Logement:</span> Appartement</p>
                    <p><span>Disponibilité:</span> Disponible</p>
                    <p><span>Surface:</span> 57m3</p>
                    <p><span>Quartier:</span> Sebenicoro</p>
                    <p><span>Etat:</span> Neuf</p>
                    <p><span>Nbre de pièces:</span> 3pièces</p> -->
                </div>
            </div>
        </div>
        <!-- <div class="container"> -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal01" id="btn1">Interessé(e)</button>
            <div class="modal" id="modal01">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">AUTHENTIFICATION</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form >
                                <label for="login">Login</label>
                                <input type="text" required="required" id="login" class="form-control">
                                <label for="password">Password</label>
                                <input type="password" required="required" id="password" class="form-control">
                                <div class="modal-footer pied-modal justify-content-center">
                                    <button type="btn" id="btn-inscrire" data-bs-toggle="modal" data-bs-target="#modal02">Inscrire</button> 
                                    <button type="btn" id="btn-connexion">Connexion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       <!-- </div> -->
       <!-- Le modal d'inscription -->     
            <div class="modal" id="modal02" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="header-modal">
                        <h5>INSCRIPTION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal""></button>
                    </div>
                    <div class="body-modal">
                    <form action="traitement_ajout_client.php" method="POST">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" required="required" class="form-control"> <br>
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" required="required" class="form-control"><br>
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" required="required" class="form-control"><br>
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" required="required" class="form-control"><br>
                        <label for="password">Password</label>
                        <input type="password" name="password" required="required" class="form-control"><br>
                        <input type="submit" name="creer" value="creer">
                    </form>
                    </div>                    
                    <div class="modal-footer pied-modal justify-content-center">
                        <input type="submit" name="creer" id="btn-modal1" value="Créer">
                        <a href="../pages/locat.php"><button type="button" id="btn-modal2">Authentifier</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
        </footer>
    <script src="js/main.js"></script>
</body>
</html>