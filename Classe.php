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
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="profilEnseignantResponsable.php">Retour</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page content -->

<section class="bannerclasse d-flex justify-content-center align-items-center w-100">
    <div class="container pt-0">
      <div class="row">
        <div id="titreflottant"class="col-lg-12"><h1>Gestion Des Classes</h1></div>
      </div>
      <div class="row ">
        <div class="dive col-lg-6">
          <a href="listeDesClasses.php" class="  bouton btn btn-lg btn-outline-primary">VOIR Classes</a>
          <a href="AjoutClasse.php" class=" bouton btn btn-lg btn-outline-success">AJOUTER CLASSES</a>
        </div>
        <div class="dive col-lg-6">
          <a href="ModifierCLasse.php" class=" bouton btn btn-lg btn-outline-warning">MODIFIER CLASSES</a>
          <a href="SupprimerClasse.php" class=" bouton btn btn-lg btn-outline-danger">SUPPRIMER CLASSES</a>
        </div>
      </div>
    </div>
  </section>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>

</body>
</html>