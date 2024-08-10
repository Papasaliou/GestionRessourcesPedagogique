<?php
if(!empty($_SESSION['statu']) and$_SESSION['statu']==0)
{
  header("location:LoginEnseignant.php");
}
?>
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
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center nav-justified" style="background-color:green;">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
              <li class="nav-item">
                  <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil<span>></span></a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link text-light"  aria-current="page" href="historique.php">Historique<span>></span></a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link text-light"  aria-current="page" href="Annonces.php">Annonce<span>></span></a>
              </li> 
            </ul>
            <ul class="navbar-nav navbar-right " >
              <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
              </li>
            </ul>
        </div>
</nav>

<div class="">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100">
    <div class="container-fluid ">
    <div class="row">
      </div>
      <div class="row ">
        <div class="diveProEnsei col-lg-10">
        <a href="ListeDesRessources.php" class="  bouton btn btn-lg btn-outline-info">Tous les ressources</a>
          <a href="AjoutRessources.php" class="  bouton btn btn-lg btn-outline-primary">Ajouter ressources</a>
          <a href="ModifierRessources.php" class=" bouton btn btn-lg btn-outline-success">Modifier ressources</a>
          <a href="SupprimerRessource.php" class=" bouton btn btn-lg btn-outline-warning">Supprimer ressources</a>
      </div>
    </div>
  </section>
</div>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>