
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
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center nav-justified" style="background-color:green;">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../Accueil.php">Accueil<span>></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../ModifierClasse.php">Retour<span>></span></a>
                </li>
               
            </ul>
        </div>
        
        <ul class="navbar-nav navbar-right " >
          <li class="nav-item">
            <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
          </li>
        </ul>
</div>

</div>
</nav>
<body >
</body>
</html>
<?php
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
$requette="select * from enseignant ";
$requette5="SELECT nom,prenom,libelle FROM cours JOIN enseignant ON enseignant.IDEnseignant=cours.idEnseignant";
$resultat=$conn->query($requette);

if(isset($_GET['idMod']))
{
    $id=$_GET['idMod'];
    $requette0="SELECT * FROM classe WHERE idClasse=$id";
    $result=$conn->query($requette0);
    $row=$result->fetch();

echo'
<section class="bannerAjouCours pt-2 d-flex justify-content-center align-items-center">
<div class="container my-5 ">
  <div class="row">
  <div class="formRessource">
    <div class="titreR">Modification des Classes</div>
        <div class="traitR"></div>
            <form action=" validerModificationClasse.php?idMod='.$id.'" method="post" enctype="multipart/form-data">
            <p class="form-groupe">  <select class="form-select" name="identifiant" aria-label="Default select example">
            <option selected>Choisir Un Enseignant</option>';
           
            while($ligne=$resultat->fetch())
            {
                $enseignant=$ligne['prenom'].' '.$ligne['nom'];
                $ident=$ligne['IDEnseignant'];
                echo' <option value="'.$ident.'">'.$enseignant.'</option>';
            } 
            echo'</select></p>
                <p class="form-groupe"><input  class="form-control" type="text" name="niveau" value="'.$row['niveau'].'"  placeholder="Niveau"></p>
                <p class="form-groupe"><input  class="form-control" type="text" name="annee"  value="'.$row['annee'].'"  placeholder="Année"></p>
                <input class="form-control btn btn-danger" type="submit" value="envoyer">
            </form>
    </div>
</div>';
}

?>