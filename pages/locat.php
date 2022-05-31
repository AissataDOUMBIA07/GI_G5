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
  <nav class="">
      <ul class="nav-ul">
          <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo1">
          <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
          <li class="nav-li"><a class="dropdown-item" href="../pages/contact.php">Contact</a></li>
          <button class="btn-connexion" type="button" class="btn" data-toggle="modal" data-target="#modal01">Connexion</button>
      </ul>
  </nav>
  <!-- Modal authentification -->
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
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="9"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/image1.jpg" alt="carousel1" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/image5.jpg" alt="carousel2" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/image4.jpg" alt="carousel3" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/image2.jpg" alt="carousel4" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/image3.jpg" alt="carousel5" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/image6.jpg" alt="carousel6" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/images (1).jfif" alt="carousel7" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/images (2).jfif" alt="carousel8" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/images (3).jfif" alt="carousel9" class="d-block" style="width:100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="../images/images (4).jfif" alt="carousel10" class="d-block" style="width:100%" height="400px">
      </div>
    </div>
  </div>
  <!--rdv page-->
  <div id="rdv" data-bs-toggle="modal" data-bs-target="#rdvModal">
    <button  type="button" class="rdvc"> PRISE RDV </button> 
  </div>
  <!-- Le modal de RDV -->
  <div class="modal fade" id="rdvModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">PRISE DE RENDEZ-VOUS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="locat2.php">
            <div class="form-group">
                <label for="Nom">Nom:</label>
                <input type="text" name="nom" required="required" class="form-control" id="Nom" placeholder="Entrez Nom">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom:</label>
                <input type="text" name="prenom" required="required" class="form-control" id="Prenom" placeholder="Entrez Prenom">
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="email" required="required" class="form-control" id="Email" placeholder="Entrez Email">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse</label>
                <input type="text" name="adresse" required="required" class="form-control" id="Adresse" placeholder="Entrez Adresse">
            </div>
            <div class="form-message">
              <label for="Message">Message</label><br>
              <textarea type="text" name="message" required="required" id="message" cols="60" rows="5" placeholder="Entrez votre texte"></textarea>
            </div>
            <button class="envoyer" type="submit" class="btn">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin du modal -->
  <div class="container-fluid mb-0 mx-0">
    <div class="row mb-6">     
      <div class="col-12 blocl col-md-6 ">
        <div>
          <img src="../images/images (1).jfif" class="float-start m-3 mt-5" width="80%", height="200px" style="border-radius: 10px;">
        </div> 
        <div>
          <img src="../images/images (3).jfif" class="float-start m-3 mb-5" width="80%", height="200px" style="border-radius: 10px;">
        </div>
      </div>
      <!-- La ligne verticale -->
      <div class="col-9 blocr col-md-6">
      <!-- <h2>Formulaire de demande</h2> -->
        <form action="locat2.php" method="POST">
          <div class="form-group mt-3">
            <label for="nom">Nom</label>
            <input type="text" required class="form-control" id="username" placeholder="Enter votre Nom" name="nom">
          </div>
          <div class="form-group mt-3">
            <label for="username">Prenom</label>
            <input type="text" required class="form-control" id="username" placeholder="Enter votre prenom" name="prenom">
          </div>
          <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group mt-3">
            <label for="tel">Tel</label>
            <input type="tel" required class="form-control" id="num" placeholder="Enter votre numero" name="telephone">
          </div>
          <div class="form-group mt-3">
            <label for="message">Message</label>
            <textarea class="form-control" required rows="5" id="message" name="message"></textarea> <br>
          </div>
          <!-- Ligne verticale -->
          <div class="v2"></div>
          <!-- Bouton à droite -->
          <span id="dmde">
            <input type="submit" name="envoyer" value="Envoyer la demande" class="dmde">
          </span>
        </form>
      </div>
    </div>
  </div>
  <footer>
      <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
    </footer>
</body>
</html>