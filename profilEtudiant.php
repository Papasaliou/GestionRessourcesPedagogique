<?php
session_start();
if(!isset($_SESSION['prenom']) and !isset($_SESSION['numero']) and !isset($_SESSION['password']) and !isset( $_SESSION['id']) and !isset($_SESSION['niveau']))
{
  header("location:etudiant.php");
}
  $prenom=$_SESSION['prenom'];
  $nom=$_SESSION['nom'];
  $numero=$_SESSION['numerocarte'];
  $niveau=$_SESSION['niveau'];
  $id=$_SESSION['password'];
  $idEtudiant= $_SESSION['id'];
  $conn=new PDO ("mysql:host=localhost;dbname=projet","root","");
  $requette0="select count(idNotification) as nombre from notification where idClasse=$niveau and vu=0";
  $resultat=$conn->query($requette0);
  $ligne=$resultat->fetch();
  if($ligne)
  $nombre= $ligne['nombre'];
  else
  $nombre=0;
  
  //$ligne=$resultat->fetch();

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
            <a class="nav-link nav-icon" href="traitement/notifications.php" >
               <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"><?php// echo $nombre ?></span>
            </a>
        </div>
    </div>
</nav>

<section class="bannerEtudiant pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 ">
      <div class="row">
        <div class="col-lg-6 ">
        <a href="consulterCours.php" class="  bouton btn btn-lg btn-outline-info">Mes Ressources</a>
        <a href="telecharger.php" class=" bouton btn btn-lg btn-outline-success">Telecharger ressources</a>
        <a href="AnnoncesEtudiant.php" class=" bouton btn btn-lg btn-outline-primary">Annonces</a>
        </div>
        <div class="col-lg-6 pt-5">
          <h1 class="text-capitalize banner-desc pt-5"><?php echo $prenom.''.$nom ;?><br>Numero:<?php  echo' '.$numero ;?></h1>
        </div>
        </div>
      </div>
  </section>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>