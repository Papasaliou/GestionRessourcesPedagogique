<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=1"/>
    <title>Document</title>
    
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg text-light" style="background-color:green">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                  <a class="nav-link text-light"  aria-current="page" href="pageAdmin.php">Accueil</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link text-light"  aria-current="page" href="classe.php">Classe</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right" >
              <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-danger" href="deconnexionAdmin.php">Deconnexion</a>
              </li>
            </ul>
        </div>
       
</nav>

 
<!-- Page content -->
<div class="">
<section class="bannerPageEnseignant d-flex justify-content-center align-items-center w-100">
    <div class="container ">
      <div class="row">
        <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Enseignants</h1></div>
      </div>
      <div class="row ">
        <div class="dive col-lg-6">
          <a href="listeEnseignant.php" class="  bouton btn btn-lg btn-outline-primary">VOIR ENSEIGNANTS</a>
          <a href="traitement/traitementAjoutEnseignant.php" class=" bouton btn btn-lg btn-outline-success">AJOUTER ENSEIGNANTS</a>
        </div>
        <div class="dive col-lg-6">
          <a href="traitement/traitementModificationEseignant.php" class=" bouton btn btn-lg btn-outline-warning">MODIFIER ENSEIGNANTS</a>
          <a href="traitement/traitementSuppressionEnseignant.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER ENNSEIGNANTS</a>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>

</body>
</html>