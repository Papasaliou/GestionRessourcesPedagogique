<?php

session_start();
  if(empty($_SESSION['statu']) and empty($_SESSION['IDEnseignant']) and empty($_SESSION['statu']))
  {
     header("location:../LoginEnseignant.php");
  }
 else if(isset($_SESSION['statu']) and $_SESSION['statu']==1)

  $ensei=$_SESSION['IDEnseignant'];
 // include("../dbconnection.php");
 else
 header("location:../LoginEnseignant.php");


  


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

</head>
<body>

<<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center" style="background-color:green">
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
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search" style="color: beige;"></i></button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
            <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
            </li>
        </ul>
</div>
       
</nav>
<div class="container">
    <div class="titreE pt-5">Suppression d`un Etudiant</div>    
      <?php
    include("../dbconnection.php");
    $requette="select * from etudiant,classe where etudiant.idClasse=Classe.idClasse and IDEnseignant=$ensei";
    $result=$bdd->query($requette);
     
    //$requette="select * from etudiant";
     // $result=$bdd->query($requette);

    



      echo'
      <div class="container-fluid Divcorps">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover align-middle">
                      <tr class="bg-success">
                          <th>numero</th>
                          <th>Prenom</th>
                          <th>Nom</th>
                          <th>E-mail</th>
                          <th>date de naissance</th>
                          <th>Numero carte</th>
                          <th>idClasse</th>
                          <th>supprimer</th>
                      </tr>';
                      while($ligne=$result->fetch())
                      {
                          $ide=$ligne['id'];
                          ?>
                      <tr>
                              <td><?php echo$ligne['id']?> </td>
                              <td><?php echo $ligne['prenom']?></td>
                              <td><?php echo $ligne['nom']?></td>
                              <td><?php echo $ligne['email']?></td>
                              <td><?php echo $ligne['datenaissance']?></td>
                              <td><?php echo $ligne['numerocarte']?></td>
                              <td><?php echo $ligne['idClasse']?></td>
                            
                              <td><a onclick="javascript: return confirm('etes vous sur de vouloir supprimer?')" href="SuppressionEtudiant.php?idEtud=<?php echo $ligne['id']?>" class="btn btn-danger">supprimer</a></td>
                          </tr>
                     <?php }?>
                    </table>
          </div>
          </div>
          
</div>
    
    
</body>
</html>