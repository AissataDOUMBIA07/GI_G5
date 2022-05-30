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
    <div class="row">
        <nav class="">
            <ul class="nav-ul">
              <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo2">
              <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
                <li class="nav-li"><a class="dropdown-item" href="../pages/client.php">Client</a></li>
                <li class="nav-li"><a class="dropdown-item" href="../pages/logement.php">Logement</a></li>
                <a href="../pages/accueil.php"><button class="btn-deconnexion">Deconnexion</button></a>
              </ul>
        </nav>
    </div>
  </div>
  <div class="container mt-3">
    <table class="table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Contact</th>
          <th>Adresse</th>
          <th>Password</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include "connexion.php";
          $sth=$PDO->query("SELECT * FROM client");
          while ($rows=$sth->fetch()) {
            echo '
              <tr>
                <td>'.$rows['Id_client'].'</td>
                <td>'.$rows['Nom'].'</td>
                <td>'.$rows['Prenom'].'</td>
                <td>'.$rows['Contact'].'</td>
                <td>'.$rows['Adresse'].'</td>
                <td>'.$rows['password'].'</td>
                <td> 
                  <button type="button" class="btn-mod" data-bs-toggle="modal" data-bs-target="#nosModal">Modifier</button>
                  <button type="button" class="btn-sup" data-bs-toggle="modal" data-bs-target="#myModal">Supprimer</button>
                </td>
              </tr>
            ';
          }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Le modal de modification -->
  <div class="modal fade" id="nosModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">MODIFICATION DES CLIENTS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
          <!-- Modal body -->
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="Libellé">Libellé:</label>
                <input type="Libellé" required="required" class="form-control" id="Libellé">
            </div>
            <div class="form-group">
                <label for="Quartier">Quartier:</label>
                <input type="Quartier" required="required" class="form-control" id="Quartier">
            </div>
            <div class="form-group">
                <label for="Propriétaire">Propriétaire:</label>
                <input type="Propriétaire" required="required" class="form-control" id="Propriétaire">
            </div>
            <div class="modal-footer pied-modal justify-content-center">
              <button type="reset" id="btn-annuller">Annuler</button>
              <button type="button" classe="close" id="btn-modifier" data-toggle="modal" data-bs-dismiss="modal">Valider</button> 
            </div>
          </form> 
        </div>       
      </div>
    </div>
  </div>
  <!--le Modal de suppression-->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title titre_modal justify-content-center d-flex">SUPPRESSION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body corps-modal justify-content-center d-flex">
          Voulez-vous vraiment supprimer ?
        </div>
        <!-- Modal footer -->
        <div class="modal-footer pied-modal justify-content-center">
          <button type="button" class="btn" id="oui" data-bs-dismiss="modal"><h6>Oui</h6> </button>
          <button type="button" class="btn" id="nom" data-bs-dismiss="modal"><h6>Non</h6></button>
        </div>
      </div>
    </div>
  </div>
    <!--Footer-->
    <footer>
      <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
    </footer>
  </div>
</body>
</html>