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
         <title>Menu de l'agence</title>
    </head>
    <?php
        include "connexion.php";
    ?>
<body>
    <!-- Le menu principal -->
    <!-- <div class="row"> -->
    <nav class="">
        <ul class="nav-ul">
            <img src="../images/g5_4.png" alt="image" width="100px", height="90px" class="image-logo2">
            <li class="nav-li"><a class="dropdown-item" href="../pages/accueil.php">Accueil</a></li>
            <li class="nav-li"><a class="dropdown-item" href="../pages/client.php">Client</a></li>
            <li class="nav-li"><a class="dropdown-item" href="../pages/logement.php">Logement</a></li>
            <a href="../pages/accueil.html"><button class="btn-deconnexion">Deconnexion</button></a>
        </ul>
    </nav>
    <div class="contenaire">
        <!-- <div class="row">  btn-deux-->
        <div class="dropdown">
            <!-- Bouton statut du logement -->
            <div class="btn-deux">
                <button type="button" class="ok btn-statut dropdown-toggle" data-bs-toggle="dropdown">Statut_Logement</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/log_dispo.php">Logement_Disponible</a></li>
                    <li><a class="dropdown-item" href="../pages/log_acheter.php">Logement_Acheter</a></li>
                    <li><a class="dropdown-item" href="../pages/log_louer.php">Logement_Louer</a></li>
                </ul>
                <!-- le bouton du modal -->
                <button type="button" class="ok btn-ajout" data-bs-toggle="modal" data-bs-target="#mymodal">Ajouter_Logement</button>
            </div>
            <!-- le début du modal ajouter-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title">AJOUTER DES LOGEMENTS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="traitement_ajout_log.php" method="POST">
                                <label for="libelle">Libelle</label>
                                <input type="text" name="libelle" required="required" class="form-control" placeholder="Entrez le libéllé"> <br>
                                <label for="type">type de logement</label>
                                <select name="type" class="form-control" required="required">
                                    <option name="ok">------------------</option>
                                    <option name="magasin">Magasin</option>
                                    <option name="habitm">Habitation meublé</option>
                                    <option name="habitnm">Habitation non meublé</option>
                                </select><br>
                                <label for="etat">Etat du logement</label>
                                <select name="etat" class="form-control">
                                    <option name="ok">----------------</option>
                                    <option name="louer">Louer</option>
                                    <option name="disponible">Disponible</option>
                                </select>
                                <label for="surface">Surface</label>
                                <input type="text" name="surface" required="required" class="form-control" placeholder="Entrez la surface du logement"><br>
                                <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" required="required" class="form-control" placeholder="Entrez l'adresse"><br>
                                <label for="matricule">Matricule du propriétaire</label>
                                <input type="text" name="matricule" required="required" class="form-control" placeholder="Matricule du propriétaire"><br>
                                <label for="image">Image</label>
						        <input type="file" name="image" class="form-control"/>
                                <input type="submit" name="ajouter" value="Ajouter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin du modal -->
        </div>
         <!-- Le tableau -->
    <div class="container mt-3" id="animate">
        <table class="table-bordered">
            <thead class="entete">
                <tr>
                    <th>ID</th>
                    <th>LIBELLE</th>
                    <th>TYPE DE LOGEMENT</th>
                    <th>ETAT</th>
                    <th>SURFACE</th>
                    <th>ADRESSE</th>
                    <th>MAT_PROPRIETAIRE</th>
                    <th>IMAGES</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="corps">
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
                        <td>'.$rows['image'].'</td>
                        <td>
                            <button type="button" class="btn-mod" data-bs-toggle="modal" data-bs-target="#monModal">Modifier</button>
                            <button type="button" class="btn-sup" data-bs-toggle="modal" data-bs-target="#myModal">Supprimer</button>                 
                        </td>
                    </tr>
                    ';
                }
            ?>
            </tbody>
        </table>
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
                <p>Voulez-vous vraiment supprimer ?</p> 
            </div>
            <!-- Modal footer -->
            <div class="modal-footer pied-modal justify-content-center">
                <button type="button" class="btn" id="oui" data-bs-dismiss="modal"><h6>Oui</h6> </button>
                <button type="button" class="btn" id="nom" data-bs-dismiss="modal"><h6>Non</h6></button>
            </div>
        </div>
        </div>
    </div>
    <!-- Le modal de modification -->
    <div class="modal fade" id="monModal">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h5 class="modal-title">MODIFICATION DES LOGEMENTS</h5>
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
    </div>
    <footer>
        <p>Copyright &copy; G5 | P 01 Dev web Simplon Mali 2022</p>
    </footer>
   <script src="js/main.js"></script>
</body>
</html>