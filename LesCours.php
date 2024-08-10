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

<nav class="cc-navbar navbar  navbar-expand-lg position-fixed navbar-dark w-100">
    <div></div>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
      <li class="nav-item pe-4">
        <a class=" btn btn-info nav-link" href="Accueil.php">Deconnexion</a>
      </li>
    </ul>
  </div>
</nav> 
<div class="sideProEnsei">
<div><button  class="openbtn w-100 border-0">&#9776;      Menu</button></div>
<div>
    <img class="img-fluid rounded rounded-circle pb-5" src="imageAdmin/pommedt.jpg" alt="">
</div>
  <a class="" href="Accueil.php">ACCUEIL</a>
  <a href="LesModules.php">MODULES</a>
  <a href="LesCours.php">Cours</a>
</div>
<!-- Page content -->
<div class="content">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100">
    <div class="container ">
    <div class="row">
      </div>
      <div class="row ">
        <div class="diveProEnsei col-lg-10">
        <a href="ListeDesCours.php" class="  bouton btn btn-lg btn-outline-info">Tous les Cours</a>
          <a href="AjoutCours.php" class="  bouton btn btn-lg btn-outline-primary">Ajouter Cours</a>
          <a href="ModifierCours.php" class=" bouton btn btn-lg btn-outline-success">Modifier Cours</a>
          <a href="SupprimerCours.php" class=" bouton btn btn-lg btn-outline-warning">Supprimer Cours</a>
      </div>
    </div>
  </section>
</div>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>