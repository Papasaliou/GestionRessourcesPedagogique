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
<nav class="navbar fixed-top navbar-expand-lg text-light" style="background-color:green">
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
                    <a class="nav-link text-light"  aria-current="page" href="classe.php">Retour</a>
                </li>

               
            </ul>
          
            <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>
 
</body>
</html>
<?php
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
$requette="select * from enseignant where statu=1";
$requette5="SELECT nom,prenom,libelle FROM cours JOIN enseignant ON enseignant.IDEnseignant=cours.idEnseignant";
$resultat=$conn->query($requette);


echo'
<section class="bannerAjouCours pt-2 d-flex justify-content-center align-items-center">
<div class="container my-5 ">
  <div class="row"><div class="formRessource">
    <div class="titreR">Ajout des Classes</div>
        <div class="traitR"></div>
            <form action=" '.$_SERVER['PHP_SELF'].'" method="post" enctype="multipart/form-data">
            <p class="form-groupe">  <select class="form-select" name="identifiant" aria-label="Default select example">
                   <option selected>Choisir un Enseignant</option>';
                
            while($ligne=$resultat->fetch())
            {
            $enseignant=$ligne['prenom'].' '.$ligne['nom'];
            $ident=$ligne['IDEnseignant'];
            echo'<option value="'.$ident.'">'.$enseignant.'</option>';
            } 
            echo'</select></P>
                <p class="form-groupe"><input  class="form-control" type="text" name="niveau"  placeholder="Niveau"></p>
                <p class="form-groupe"><input  class="form-control" type="text" name="annee"  placeholder="Année"></p>
                <input class="form-control btn btn-danger" type="submit" value="envoyer">
            </form>
    </div>';

if(isset($_POST['niveau']) and isset($_POST['annee']) and isset($_POST['identifiant']))
{
    $niveau=$_POST['niveau'];
    $an=$_POST['annee'];
    $id=$_POST['identifiant'];
    $requette1="insert into  classe (niveau,annee,IDEnseignant) values('$niveau',$an,$id)";
    $conn->exec($requette1);
}


?>