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
                    <a class="nav-link text-light"  aria-current="page" href="profilEnseignantResponsable.php">Retour<span>></span></a>
                </li>
               
            </ul>
            <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>

    
   
</body>
</html>
<?php
 
 session_start();
 if(empty($_SESSION['statu']) and empty($_SESSION['IDEnseignant']) and empty($_SESSION['statu']))
 {
    header("location:LoginEnseignant.php");
 }
 else if(isset($_SESSION['statu']) and $_SESSION['statu']==1){
 
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
$requette1="select * from enseignant";
$resultat=$conn->query($requette1);


       
echo'<section class="bannerAjouCours pt-2 d-flex justify-content-center align-items-center">
<div class="container my-5 ">
  <div class="row">

<div class="formRessource">
<div class="titreR">Ajout des Cours</div>
<div class="traitR"></div>

<form action=" '.$_SERVER['PHP_SELF'].'" method="post" enctype="multipart/form-data">';

           
     echo'  
     
     <p class="form-groupe">
     <select class="form-select"  name="enseignant" aria-label="Default select example">
        <option selected>Choisir Un Enseignant</option>';

        while($ligne=$resultat->fetch())
       {
          $enseignant=$ligne['prenom'].'  '.$ligne['nom'];
       echo' <option value="'.$ligne['IDEnseignant'].'"> '.$enseignant.'</option>';
       }
       ?>
    </select></p>
    <p class="form-groupe"><input  class="form-control " type="text" name="libelle"  placeholder="Libelle"></p>
    <p class="form-groupe"> <select id="selection" class="form-control form-select" name="classe"required  >";
        <option value="">choisir une Classe</option>
   
   <?php 
         
           
         include("dbconnection.php");
         $reqq="select idClasse, niveau from classe";
         $res=$bdd->query($reqq);
         while($row=$res->fetch())
         {
             
           ?>
            <option value="<?php echo$row['idClasse']?>"><?php echo$row['niveau']?></option> ";
         <?php
         }
         ?>
         </select>
   </p>
    <input class="form-control btn btn-danger" type="submit" value="envoyer" name="envoyer">
  
     

    
          
</form>
</div>
</div>
      </div>
  </section>
<?php
if(isset($_POST['envoyer'])){
if(isset($_POST['libelle'],$_POST['classe']))
{
    $lib=$_POST['libelle'];
    $Id=$_POST['enseignant'];
    $idc=$_POST['classe'];
    $requette2="insert into cours (libelle,IdEnseignant,classe) values ('$lib',$Id,$idc)";
    $conn->exec($requette2);
    ?>
    <script> 
    let mes=documentById('mes');

</script>
    <?php

}
}
 }
?>