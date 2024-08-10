<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../fichierBootstrap/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../fichierBootstrap/myCSS/monStyle.css">
   

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
                    <a class="nav-link text-light"  aria-current="page" href="../Accueil.php">Accueil<span>></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../profilEnseignantResponsable.php">Retour<span>></span></a>
                </li>
            </ul>
        </div>
    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-left" >
               <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="../deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
</div>
       
</nav>


<div class=" container" >
    
  <?php
  session_start();
  if(empty($_SESSION['statu']) and empty($_SESSION['IDEnseignant']) and empty($_SESSION['statu']))
  {
     header("location:../LoginEnseignant.php");
  }
 else if(isset($_SESSION['statu']) and $_SESSION['statu']==1)
  {

  $ensei=$_SESSION['IDEnseignant'];
  include("../dbconnection.php");

  $sql="select * from etudiant,classe where etudiant.idClasse=Classe.idClasse and IDEnseignant=$ensei";
  $resulat=$bdd->query($sql);



 

  echo' <div class="titreE pt-5">Liste Des Etudiants </div> 
  <div  class="container-fluid Divcorps">
      <div class="row">
          <div class="col-sm-12  " >
              <table class="table table-bordered table-striped table-hover align-middle ">
                  <tr class="bg-success">
                  <th>numero</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>E-mail</th>
                  <th>date de naissance</th>
                  <th>Numero carte</th>
                  <th>idClasse</th>
                </tr>';

while($row=$resulat->fetch())
{
  $id=$row[0];
  echo"<tr>";
  echo"<td>$row[id]</td>";
  echo"<td>$row[nom]</td>";
  echo"<td>$row[prenom]</td>";
  echo"<td>$row[email]</td>";
  echo"<td>$row[datenaissance]</td>";
  echo"<td>$row[numerocarte]</td>";
  echo"<td>$row[idClasse]</td>";
  
  
  
  
  echo"</tr>";
}       
  ?>
</div>
<?php
  }
  ?>
</div>
</body>
</html>
