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
  
<nav class="cc-navbar navbar  navbar-expand-lg position-fixed navbar-dark w-100">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
      <li class="nav-item pe-4">
        <a  class="nav-link" href="#" >Accueil</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link pe-4" href="#">je suis Enseignant</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link" href="#">Je suis Etudiant</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link" href="#">Se Connecter</a>
      </li>
    </ul>
  </div>
</nav> 
<div class="sidebar">
<div><button  class="openbtn w-100 border-0">&#9776;      Menu</button></div>
  <a class="" href="Accueil.php">ACCUEIL</a>
  <a href="PageEnseignants.php">ENSEIGNANTS</a>
  <a href="PageEtudiants.php">ETUDIANTS</a>
  <a href="pageClasse.php">CLASSE</a>
</div>
<!-- Page content -->
<div class="content">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100">
    <div class="container ">
    <div class="row">
        <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Etudiants</h1></div>
      </div>
      <div class="row ">
        
        <div class="dive col-lg-6">
          <a href="Approuver.php" class="  bouton btn btn-lg btn-outline-primary">VOIR ETUDIANTS</a>
          <a href="traitement/traitementAjoutEtudiant.php" class=" bouton btn btn-lg btn-outline-success">Approuver DEMMANDE DES ETUDIANTS</a>
        </div>
        <div class="dive col-lg-6">
          <a href="traitement/traitementModificationEtudiant.php" class=" bouton btn btn-lg btn-outline-warning">MODIFIER ETUDIANTS</a>
          <a href="traitement/traitementSuppressionEtudiant.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER ETUDIANTS</a>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>

</body>
</html>