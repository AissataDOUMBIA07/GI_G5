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
    <?php echo "Test si git foctionne";  ?>
    <!-- Le menu principal -->
    <div class="">
        <!-- <div class="row"> -->
            <nav class="">
                <ul class="nav-ul">
                    <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo1">
                    <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
                    <li class="nav-li"><a class="dropdown-item" href="../pages/contact.php">Contact</a></li>
                    <button class="btn-connexion" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal01">Connexion</button>
                </ul>
            </nav>
            <!-- <div class="container"> -->
            <div class="modal" id="modal01" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" id="header">
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
                                    <button type="btn" id="btn-inscrire" data-toggle="modal" data-target="#modal02">Inscrire</button> 
                                    <button type="btn" id="btn-connexion">Connexion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- Modal authentification -->
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
        
        <!-- Le sous menu -->
        <!-- <div class="row"> -->
            <!-- <nav class="nav-i">
                <div class="sous_menu">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook icone"></i></a>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin icone"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter icone"></i></a>
                </div>
            </nav> -->
        <!-- </div> -->
    </div>
    <!--Caroussel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/image1.jpg" style="width: 150%;">
        </div>
        <div class="carousel-item">
            <img src="../images/image2.jpg" style="width: 150%;">
        </div>
        <div class="carousel-item">
            <img src="../images/image3.jpg" style="width: 150%;">
        </div>
        <div class="carousel-item">
            <img src="../images/image4.jpg" style="width: 150%;">
        </div>
        <div class="carousel-item">
            <img src="../images/image5.jpg" style="width: 150%;">
        </div>
        <div class="carousel-item">
            <img src="../images/image6.jpg" style="width: 150%;">
        </div>
        </div>
    </div>
        <!-- Les images et les boutons details -->
        <div class="container">
        <div class="row">
            <div class="col-lg-6 vente">
            <h4 ><strong>VENTE</strong> </h4>
            </div>
            <div class="col-lg-6 location">
            <h4><strong>LOCATION</strong> </h4>
            </div>
        </div>
        </div>
        <?php
            include "connexion.php";
			$sth=$PDO->query("SELECT * FROM logement WHERE etat='Disponible'");
			while ($rows=$sth->fetch()) {
				$lib = $rows['libelle'];
				echo '
                    <div class="gb-image">
                    <div class="container">
                        <div class="row ligne1">
                        <div class="col-lg-6 col1">
                            <img src="'.$rows['image'].'" style="width: 300px; height: 150px; border-radius: 5px; position: relative; right: 140px">
                            <a href="../pages/details.php"><input class="btn1" type="submit" name="details" value="Details" style=" position: relative; left: 30px"></a>
                        </div>
                        <div class="col-lg-6 col2">
                            <img src="'.$rows['image'].'" style="width: 300px; height: 150px; border-radius: 5px; position: relative; right: 170px">
                            <a href="../pages/details.php"><input class="btn2" type="submit" value="Details" name="details"></a>   
                        </div>
                        </div>
                        <!-- Ligne verticale -->
                        <div class="v"></div>
                        <!-- <hr style="position: relative; margin-top: 100px; width: 1340px; margin-left: -110px; height: 3px;"> -->
                        <div class="row ligne2">
                        <div class="col-lg-6 col1">
                            <img src="'.$rows['image'].'" style="width: 300px; height: 150px; border-radius: 5px; position: relative; right: 140px;">
                            <a href="../pages/details.php"><input name="details" value="Details" class="btn1" type="submit" style=" position: relative; left: 30px">></a>
                        </div>
                        <div class="col-lg-6 col2">
                            <img src="'.$rows['image'].'" style="width: 300px; height: 150px; border-radius: 5px; position: relative; right: 170px">
                            <a href="../pages/details.php"><input class="btn2" type="submit" value="Details" name="details"></a>   
                        </div>
                        </div>
                    </div>
                    </div>
                ';
            }
        ?>
        <footer>
        <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
        </footer>
    <script src="script.js"></script>
</body>
</html>