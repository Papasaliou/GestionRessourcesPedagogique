<?php
session_start();
if(!isset($_SESSION['niveau']) and !isset($_SESSION['idNotification']) and !isset($_SESSION['prenom']) and !isset($_SESSION['nom']) and !isset($_SESSION['Idressource']))
{
    header("location:../etudiant.php");
}

$idNotif=$_SESSION['idNotification'];
$niveau=$_SESSION['niveau'];
$ress=$_SESSION['Idressource'];
$conn=new PDO ("mysql:host=localhost;dbname=projet","root","");
$statu=1;
$requette0="UPDATE notification SET vu=1 WHERE idNotification=$idNotif";
$res=$conn->exec($requette0);

$requette="SELECT res.Idressource, res.libelle as libres,type,fichier,crs.libelle as libcrs,vu FROM notification as noti JOIN ressources as res join cours as crs  ON res.idClasse=noti.idClasse and   crs.idCours=res.idCours where noti.idClasse=$niveau and res.Idressource=$ress";
$resultat=$conn->query($requette);
$ligne=$resultat->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="../fichierBootstrap/myCSS/monStyle.css">
    <link href="../fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
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
                    <a class="nav-link text-light"  aria-current="page" href="../Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../profilEtudiant.php">Retour</a>
                </li>
            </ul>            
        </div>
    </div>
</nav>

<?php

echo'<div class= bannerEtudiant pt-5 d-flex justify-content-center align-items-center">
       
               <div class="container pt-5  ">
               <h1 class="text-capitalize banner-desc pt-5 ">liste des resssources </h1>
                    <div class="row">
                        <div class="col-sm-12  " >';
                        while($ligne=$resultat->fetch())
                        {
                        echo'<div class="border-3">';
                          $ide=$ligne['Idressource']; 
                          $ressource=$ligne['fichier'];
                          //$libelle=$ligne['libelle'];
                          echo'<div class="card w-95 mb-4">
                          <div class=" row card-body">
                                <div class="col-lg-11">
                                    <h5 class="card-title">'.$ligne['type'].'</h5>
                                    <p class="card-text">'.$ligne['libcrs'].':'.$ligne['libres'].'</p>
                                </div>
                                <div class="col-lg-1">
                                    <a id="ah" href="../EnseignantVisualiseRessources.php?url='.$ligne['fichier'].'" class="btn btn-success pl-0">Voir</a>
                                </div>
                          </div>
                      </div>';
                      }
            echo'</div>
            </div>
       </div>
       </div>';

?>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>