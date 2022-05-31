
<body>
    <form action="traitement_ajout_client.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom" required="required" class="form-control" placeholder="Entrez le nom"> <br>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" required="required" class="form-control" placeholder="Entrez le nom"><br>
        <label for="contact">Contact</label>
        <input type="text" name="contact" required="required" class="form-control" placeholder="Entrez le nom"><br>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" required="required" class="form-control" placeholder="Entrez le nom"><br>
        <label for="password">Password</label>
        <input type="password" name="password" required="required" class="form-control" placeholder="Entrez le nom"><br>
        <input type="submit" name="creer" value="creer">
    </form>
</body>
