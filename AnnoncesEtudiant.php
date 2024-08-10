<?php
session_start();
if(!isset($_SESSION['niveau']) and isset($_SESSION['id']))
{
    header("location:LoginEnseignant.php");
}
 $niveau=$_SESSION['niveau'];
 $etudiant=$_SESSION['id'];

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
                    <a class="nav-link text-light"  aria-current="page" href="profilEtudiant.php">Retour<span>></span></a>
                </li>
               
            </ul>
            <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
        </div>
</nav>




      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
    $requette="select enseignant.nom as nom,enseignant.prenom as prenom , mots,DateAnnonce from annonces,classe,enseignant,etudiant where annonces.IDEnseignant=classe.IDEnseignant and annonces.IDEnseignant=enseignant.IDEnseignant and enseignant.IDEnseignant=classe.IDEnseignant and etudiant.id= $etudiant AND etudiant.idClasse=$niveau and annonces.idClasse=etudiant.idClasse ORDER BY DateAnnonce DESC limit 10";
    $result=$conn->query($requette);
     
      echo'<div class="bannerAnnonce pt-5 d-flex justify-content-center align-items-center">
              <div class="container pt-5 long">
                    <div class="row">
                      <div class="col-sm-12  " >';
                      while($ligne=$result->fetch())
                      {
                        echo'<div class="border-3">';
                          $nom=$ligne['nom']; 
                          $prenom=$ligne['prenom']; 
                          $mots=$ligne['mots']; 
                          $date=$ligne['DateAnnonce']; 
                          echo'<div class="card w-95 mb-3 bg-success">
                          <div class=" row card-body b">
                                <div class="col-lg-9">
                                    <h2 class="card-title text-light">'.$prenom.' '.$nom.'</h2>
                                    <h5 class="card-text text-light">'.$mots.'</h5>
                                </div>
                                <div class="col-lg-3">
                                    <span class="text-light"><h1>'.$date.'</h1></span>
                                </div>
                          </div>
                      </div>';
                      }
               echo'</div>
       </div>
       </div>
   </div>
   </div>';
      ?>
     
   
</body>
</html>