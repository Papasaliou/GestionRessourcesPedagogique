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
<body >
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
        </div>
        
        <ul class="navbar-nav navbar-right " >
          <li class="nav-item">
            <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
          </li>
        </ul>
</div>
</nav>
  <?php
  $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
  $requette="select * from cours where IDEnseignant=$identifiant";
  $requette1="select * from classe,cours where cours.idEnseignant=$identifiant AND classe.idClasse=cours.classe;";
  $result=$conn->query($requette);
  $result1=$conn->query($requette1);
 
   echo'<section class="bannerAjouCours pt-2 d-flex justify-content-center align-items-center">
   <div class="container my-5 ">
     <div class="row">

   <div class="formRessource">
        <div class="titreR">Ajout des ressources</div>
        <div class="traitR"></div>
        <form action="traitement/traitementAjoutRessource.php" method="post" enctype="multipart/form-data">
        <p class="form-groupe  ">
           <select class="form-select" name="classe" aria-label="Default select example">
              <option selected>Choisir Une classe</option>';
              while( $row=$result1->fetch())
            {
              echo'<option value="'.$row['idClasse'].'">'.$row['niveau'].'</option>';
            }
         echo' </select></p>
           <p class="form-groupe  ">
           <select class="form-select" name="cours" aria-label="Default select example">
              <option selected>Choisir Un Cours</option>';
              while( $ligne=$result->fetch())
            {
              echo'<option value="'.$ligne['idCours'].'">'.$ligne['libelle'].'</option>';
            }
         echo' </select>
             </p> 
            <p class="form-groupe"><input  class="form-control" type="text" name="nom"  placeholder="Libelle"></p>

            <p class="form-groupe  ">
              <select class="form-select" name="type" aria-label="Default select example">
                <option selected>Type</option>
                <option value="COURS">COURS</option>
                <option value="TD">TD</option>
              </select>
            </p> 
            <p class="form-groupe"><input  class="form-control" type="file" name="ressource"></p>
            <input class="form-control btn btn-danger" type="submit" value="envoyer">
        </form>
    </div>
    </div>
    </div>
    </section>

</body>
</html>';
?>   

