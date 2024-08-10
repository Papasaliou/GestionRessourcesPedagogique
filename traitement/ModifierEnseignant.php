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

<nav class="navbar fixed-top navbar-expand-lg text-light" style="background-color:green">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../pageAdmin.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../pageClasse.php">Classe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="traitementModificationEseignant.php">Retour</a>
                </li>


               
            </ul>
          
            <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="../deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>

 
<?php
session_start();
if(empty($_SESSION['idAdmin']))
{
  header("location:LoginAdmin.php");
}
if(isset($_GET['id']))
{
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
$requette="select * from enseignant where IDEnseignant=".$_GET['id']."";
$result=$conn->query($requette);
$row=$result->fetch();







echo'
<section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 ">
    <div class="row">
        <div class="col-lg-6 ">
<div class="formAjoutEnseignant">
            <div class="titreE">Modification dun Enseignant</div>
            <div class="traitE"></div>
            <form action="validerModificationEnseignant.php?id='.$_GET['id'].' " method="post" enctype="multipart/form-data">
                <p class="form-groupe"><input  class="form-control" type="text" name="nom" value="'.$row['nom'].'" placeholder="Nom"></p>
                <p class="form-groupe"><input  class="form-control" type="text" name="prenom" value="'.$row['prenom'].'"  placeholder="Prenom"></p>
                <p class="form-groupe"><input  class="form-control" type="email" name="mail"  value="'.$row['mail'].'" placeholder="E-Mail"></p>
                <p class="form-groupe"><input  class="form-control" type="password" name="password" value="'.$row['Mdpasse'].'" placeholder="Mot de passe"></p>
                <p class=""> 
                  <select class="form-select"  name="statu" aria-label="Default select example">
                      <option> Je Suis Responsable</option>
                      <option value="1">OUI</option>
                      <option value="0">NON</option>
                </select>
                </p>
                <div class="formfoot">
                  <input class=" btn btn-success" type="submit" value="envoyer" name="envoyer"s>
                  <input type="reset" class="btn btn-danger" value="annuler">
                </div>
            </form>
        </div>
</div>

</body>
</html>';
}
?>

