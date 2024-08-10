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
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="classe.php">Retour</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    
      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="SELECT idClasse,nom,prenom,annee,niveau FROM classe JOIN enseignant ON enseignant.IDEnseignant=classe.IDEnseignant;";
      $result=$conn->query($requette);
      echo'
      <div  class="container-fluid Divcorps pt-5">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover align-middel">
                      <tr class="bg-success ">
                          <th>Niveau</th>
                          <th>Annee</th>
                          <th>Responsable</th>
                          <th>Edition</th>
                      </tr>';
                      while($ligne=$result->fetch())
                      {
                      echo'<tr>
                              <td>'.$ligne['niveau'].'</td>
                              <td><span>'.$ligne['annee'].'</span></td>
                              <td>'.$ligne['prenom'].'  '.$ligne['nom'].'</td>
                              <td><a href="traitement/traitementModificationClasse.php?idMod='.$ligne['idClasse'].'" class="btn btn-primary">Editer</a></td>
                          </tr>';
                      }
                echo' </table>
          </div>
          </div>
          </div>';
      ?>
      </div>



    
</body>
</html>