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
<nav class="cc-navbar navbar  navbar-expand-lg position-fixed navbar-dark w-100">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
      <li class="nav-item pe-4">
        <a  class="nav-link" href="#" >Accueil</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link pe-4" href="#">je suis Enseignant</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link" href="#">Je suis Etudiant</a>
      </li>
      <li class="nav-item pe-4">
        <a class="nav-link" href="#">Se Connecter</a>
      </li>
    </ul>
  </div>
</nav>
<div class="sidebar">
<div><button  class="openbtn w-100 border-0">&#9776;      Menu</button></div>
  <a class="" href="Accueil.php">ACCUEIL</a>
  <a href="LesModules.php">MODULES</a>
  <a href="LesCours.php">COURS</a>
</div>
<div class="content">
    
      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="SELECT * FROM module JOIN modulecours on modulecours.Idmod=module.idModule";
      $result=$conn->query($requette);
      echo'<div class="incontentsup">
      <div id="corps" class="container-fluid">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover ">
                      <tr class="bg-seccess bg-info">
                      <th>UE</th>
                      <th>Cours</th>
                      <th>Enseignants</th>
                      <th>Supprimer</th>

                      </tr>';
                      while($ligne=$result->fetch())
                      {
                          $ide=$ligne['idModule'];
                      echo'<tr>
                      <td>'.$ligne['libelle'].'</td>
                      <td>'.$ligne['cours'].'</td>
                      <td>'.$ligne['enseignant'].'</td>
                              <td><a href="traitement/traitementSuppressionModule.php?idSup='.$ligne['idModule'].'" class="btn btn-danger">supprimer</a></td>
                          </tr>';
                      }
                echo' </table>
          </div>
          </div>';
      ?>
      </div>    
</body>
</html>