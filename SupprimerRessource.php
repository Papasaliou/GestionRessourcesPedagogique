<?php
session_start();
if(!isset($_SESSION['IDEnseignant']))
{
    header("location:LoginEnseignant.php");
}
 $identifiant=$_SESSION['IDEnseignant'];

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
                    <a class="nav-link text-light"  aria-current="page" href="profilEnseignant.php">Retour<span>></span></a>
                </li>
               
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search" style="color: beige;"></i></button>
            </form>
            <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
        </div>
</nav>
      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="  SELECT  ressources.libelle as libres,type,cours.libelle as libcrs,fichier,Idressource FROM `ressources`,cours,enseignant WHERE ressources.idCours=cours.idCours AND enseignant.IDEnseignant=cours.idEnseignant and enseignant.IDEnseignant=$identifiant";
      //$requette="select * from  ressources";
      $result=$conn->query($requette);
      echo'<section class="bannerRessource pt-5 d-flex justify-content-center align-items-center w-100">
      <div class="container pt-5 ">
        <div class="row">
              <div class="col-sm-12  " >';
                      while($ligne=$result->fetch())
                      {
                        echo'<div class="border-3">';
                          $ide=$ligne['Idressource']; 
                          $ressource=$ligne['fichier'];
                          echo'<div class="card w-95 mb-3">
                          <div class=" row card-body">
                                <div class="col-lg-10">
                                    <h5 class="card-title">'.$ligne['type'].'</h5>
                                    <p class="card-text">'.$ligne['libcrs'].':'.$ligne['libres'].'</p>
                                </div>
                                <div class="col-lg-2">
                                    <a href="traitement/validerSuppressionRessources.php?idSup='.$ligne['Idressource'].'" class="btn btn-danger pl-0">Supprimer</a>
                                </div>
                          </div>
                      </div>';
                      }
               echo'</div>
            </div>
       </div>
       </section>';
      ?>
</body>
</html>