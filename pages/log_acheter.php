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
    <!-- Le tableau -->
    <div class="container mt-3">
        <table class="table-bordered">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>LIBELLE</th>
                    <th>TYPE LOGEMENT</th>
                    <th>ETAT</th>
                    <th>ADRESSE</th>
                    <th>MATRICULE PROPRIETAIE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "connexion.php";
                    $sth=$PDO->query("SELECT * FROM logement");
                    while ($rows=$sth->fetch()) {
                        echo '
                        <tr>
                            <td>'.$rows['id_log'].'</td>
                            <td>'.$rows['libelle'].'</td>
                            <td>'.$rows['type_log'].'</td>
                            <td>'.$rows['etat'].'</td>
                            <td>'.$rows['surface'].'</td>
                            <td>'.$rows['adresse'].'</td>
                            <td>'.$rows['Mat_propri'].'</td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
            </tbody>
        </table>
    </div>
    <a href="../pages/logement.php"><button class="button" type="close" data-dismiss="modal" >Retour</button></a>
    <footer>
      <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
    </footer>
</body>
</html>