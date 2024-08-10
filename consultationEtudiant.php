<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:etudiant.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="myCSS/style.css" />
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css">
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="consulterCours.php">Consulter COURS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="telecharger.php">Telecharger cours</a>
                </li>
               
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search" style="color: beige;"></i></button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexion.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>
<div class="content">
<section class=" d-flex justify-content-center align-items-center w-100">
    <div class="container ">
      
      <div class="row dive3">
        <div class="dive col-lg-6">
        
          <a href="consulterCours.php" class=" bouton btn btn-lg ">Consulter COURS</a>
        </div>
        <div class="div col-lg-6">
         
          <a href="telecharger.php"class=" bouton btn btn-lg ">Telecharger cours</a>
        </div>
      </div>
    </div>
  </section>
    </div>
</body>
</html>