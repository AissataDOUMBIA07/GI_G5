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
    <nav>
        <ul class="nav-ul">
            <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo2" style="position: relative; right: 32%;">
            <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
            <li class="nav-li"><a class="dropdown-item" href="../pages/contact.php">Contact</a></li>
            <a href="../pages/accueil.php"><button class="btn-deconnexion" style="position: relative; left: 300%; font-size: 15px;">Deconnexion</button></a>
        </ul>
    </nav>
    <nav class="nav-i">
        <div class="sous_menu">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook icone"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter icone"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin icone"></i></a>
        </div>
    </nav>
    </div>
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
    <div class="formulaire">
        <form>
            <div class="form-group contact">
                <label for="Nom" class="lab">Nom:</label>
                <input type="Nom"  required="required" class="form-control" id="Nom" placeholder="Entrez Nom">
            </div>
            <div class="form-group contact">
                <label for="Prenom" class="lab">Prenom:</label>
                <input type="Prenom"  required="required" class="form-control" id="Prenom" placeholder="Entrez Prenom">
            </div>
            <div class="form-group contact">
                <label for="Adresse" class="lab">Telepone</label>
                <input type="number" max="15" min="8" required="required" class="form-control" id="telephone" placeholder="Entrez Téléphone">
            </div>
            <div class="form-group contact">
                <label for="Email" class="lab">Email:</label>
                <input type="email" required="required" class="form-control" id="Email" placeholder="Entrez Email">
            </div>
            <div class="form-message contact">
                <label for="Message" class="lab">Message</label><br>
                <textarea name="Message"  required="required" id="message" cols="139" rows="8" placeholder="Entrez votre texte"></textarea>
            </div>
            <button class="Envoyer" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="justify-content-center">
        <a href="../pages/accueil.html"><button class="retour_Adja" type="close" data-dismiss="modal" >Retour</button></a>
    </div>
    <footer>
        <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
    </footer>
</body>
</html>