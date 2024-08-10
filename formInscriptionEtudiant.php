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
<body>
    <div class="formRessource">
        <div class="titreR">Ajout des ressources</div>
        <div class="traitR"></div>
        <form action="traitement/traitementAjoutRessource.php" method="post" enctype="multipart/form-data">
            <p class="form-groupe"><input class="form-control" type="text" name="nom" placeholder="Numero ressouce"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name="prenom"  placeholder="Libelle"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name=""  placeholder="Type"></p>
            <p class="form-groupe"><input class="form-control" type="text" name="" placeholder="Numero ressouce"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name=""  placeholder="Libelle"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name=""  placeholder="Type"></p>
            <p class="form-groupe"><input class="form-control" type="text" name="" placeholder="Numero ressouce"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name=""  placeholder="Libelle"></p>
            <p class="form-groupe"><input  class="form-control" type="text" name=""  placeholder="Type"></p>
            <p class="form-groupe"><input  class="form-control" type="file" name="" accept="image/*"></p>
            <input class=" btn btn-danger" type="submit" value="envoyer">
            <input type="reset" class="btn btn-info" value="annuler">

        </form>
    </div>
</body>
</html>