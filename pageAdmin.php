<?php
if(!empty($_SESSION['idAdmin']))
{
  header("location:LoginAdmin.php");
}
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
   
    <script language="javascript">
         function f(){
            alert("Vous avez bien cliqué sur le bouton!");
         }
    </script>
  
</head>
<body class="banner">
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
            <ul class="navbar-nav navbar-right   " style="float: left;">
            <li class="nav-item" >
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page content -->
<div class="content">
<section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 py-2">
        <div class="row">
          <div class="col-lg-6 ">
            <h1 class="text-capitalize py-3 banner-desc">plateforme  de partage<br>des Ressources Pedagogiques<br>a la Section Informatique de l`UCAD</h1>
          </div>
          <div class="col-lg-6 py-5">
            <div class="boutonAdmin ">
              <a href="PageEnseignants.php" class=" bouton btn btn-lg btn-outline-primary ">Gestion des Enseignants</a>
            </div>
            <div class="boutonAdmin">
              <a href="Classe.php"class=" bouton btn btn-lg  btn-outline-warning">Gestion des Classes et leur Responsable</a>
            </div>     
          </div>
      </div>
    </div>
</section>

<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
    
</script>

  </body>
</html>