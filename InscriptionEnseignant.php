<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bodyLogEns">
<div class="formInsEnsei">
    <div class="titreR">Inscription Enseignant</div>
    <div class="traitR"></div>
    <form action="traitement/AjoutEnseignantDansDB.php" method="post" enctype="multipart/form-data">
        <p class="form-groupe"><input  class="form-control" type="text" name="nom" placeholder="Nom"></p>
        <p class="form-groupe"><input  class="form-control" type="text" name="prenom" placeholder="prenom"></p>
        <p class="form-groupe"><input  class="form-control" type="text" name="mail"  placeholder="E-mail"></p>
        <p class="form-groupe"><input  class="form-control" type="text" name="login" placeholder="Login"></p>
        <p class="form-groupe"><input  class="form-control" type="text" name="password"  placeholder="mot de passe"></p>
        <p class="form-groupe"><input  class="form-control" type="hidden" name="statu" ></p>
        <div class="footFormIns">
            <input class=" btn btn-info" type="submit" value="S'inscrire">
            <input type="reset" class="btn btn-danger" value="Annuler">
        </div>
    </form>
 </div>
    
</body>
</html>