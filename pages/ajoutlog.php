<!DOCTYPE html>
<html lang="fr">
<head>
  <title>AJOUTEZ LOGEMENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="modalrdv.css">
</head>
<body>

<div class="container mt-3">
  <h2>Ajouter des Logements</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    AJOUTEZ LOGEMENT
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AJOUTER DES LOGEMENTS</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form>
                    <div class="form-group">
                        <label for="type_log">type_log:</label>
                        <input type="type_log" name="type_log" required="required" class="form-control" id="type_log" placeholder="Entrez type de logement">
                    </div>
                    <div class="form-group">
                        <label for="etat">etat:</label>
                        <input type="etat"  name="etat" required="required" class="form-control" id="etat" placeholder="decris l'etat">
                    </div>
                    <div class="form-group">
                        <label for="surface">surface:</label>
                        <input type="surface"  name="surface" required="required" class="form-control" id="surface" placeholder="mettez la surface">
                    </div>
                    <div class="form-group">
                        <label for="adresse">adresse:</label>
                        <input type="adresse"  name="adresse" required="required" class="form-control" id="adresse" placeholder="Entrez l'adresse">
                    </div>
                    <div class="form-group">
                        <label for="disponibilite">disponibilite:</label>
                        <input type="disponibilite"  name="disponibilite" required="required" class="form-control" id="disponibilite" placeholder="Entrez la disponibilité">
                    </div>
                    <div class="form-group">
                        <label for="id_propri">id_propri:</label>
                        <input type="id_propri"  name="id_propri" required="required" class="form-control" id="id_propri" placeholder="Mettez l'id de proprietaire">
                    </div>
                      <button class="retour" type="close"data-dismiss="modal" >Retour</button>
                      <button class="ajouter" type="submit"> Ajouter</button>
                
          </form>

          
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
<div class="modal" id="mymodal">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <!-- L'entête du modal -->
          <div class="header-modal">
              <h5>INSCRIPTION</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal">×</button>
          </div>
          <!-- le corps du modal -->
          <div class="body-modal">
              <form action="">
                  <div class="form-group">
                      <label for="">Nom</label>
                      <input type="text" name="nom" class="form-control">
                      <label for="">Prénom</label>
                      <input type="text" name="prenom" class="form-control">
                      <label for="">Contact</label>
                      <input type="text" name="contact" class="form-control">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control">
                  </div>
              </form>
          </div>
          <!-- le footer du modal -->
          <div class="footer-modal">
              <button type="button" class="btn-modal1">Créer</button>
              <button type="button" class="btn-modal2 ">Authentifier</button>
          </div>
      </div>
</html>
