<?php
session_start();
if(isset($_SESSION['statu']) and $_SESSION['statu']==0)
{
  header("location:LoginEnseignant.php");
}
?>


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
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center" style="background-color:green">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>
    
 
<!-- Page content -->
<div class="">
<section class="bannerPensei d-flex justify-content-center align-items-center w-100 ">
    <div class="container-fluid">
      <div class="row ">
        <div class="dive col-lg-6 mt-5">
            <div class="row ">
              <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Etudiants</h1></div>
            </div>
          <a href="traitement/listeEtudiant.php" class="  bouton btn btn-lg btn-outline-primary">VOIR La Liste Des Etudiants</a>
          <a href="traitement/ApprouverDemande.php" class=" bouton btn btn-lg btn-outline-success">Approuver demande des Etudiants</a>
          <a href="#" class=" bouton btn btn-lg btn-outline-warning">MODIFIER Etudiant</a>
          <a href="traitement/traitementSuppressionEtudiant.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER Etudiant</a>
        </div>
        <div class="dive col-lg-6 mt-5">
          <div class="row">
              <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Cours</h1></div>
          </div>
          <a href="ListeDesCours.php" class="  bouton btn btn-lg btn-outline-primary">Voir La Liste Des COURS</a>
          <a href="AjoutCours.php" class=" bouton btn btn-lg btn-outline-success">AJOUTER COURS</a>
          <a href="ModifierCours.php" class=" bouton btn btn-lg btn-outline-warning">MODIFIER COURS</a>
          <a href="SupprimerCours.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER COURS</a>
        </div>
       
      </div>
        <div class="dive col-lg-6"style="margin-left: 280px;">
          <a href="profilEnseignant.php" class=" bouton btn btn-lg btn-outline-warning">GESTION RESSOURCES</a>
        </div>
    </div>
  </section>
</div>


<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>

</body>
</html>