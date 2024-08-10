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
                    <a class="nav-link text-light"  aria-current="page" href="../Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../Classe.php">Classe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../pageEnseignants.php">Retour</a>
                </li>

               
            </ul>
          
            <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>

<div class="container pt-5">
      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="select * from enseignant";
      $result=$conn->query($requette);
      echo'
      <div  class="container-fluid Divcorps">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover ">
                      <tr class="bg-success ">
                          <th>Prenom</th>
                          <th>Nom</th>
                          <th>E-mail</th>
                          <th>Editer</th>
                      </tr>';
                      while($ligne=$result->fetch())
                      {
                          $ide=$ligne['IDEnseignant'];
                      echo'<tr>
                              <td>'.$ligne['prenom'].'</td>
                              <td>'.$ligne['nom'].'</td>
                              <td>'.$ligne['mail'].'</td>
                              <td><a href="ModifierEnseignant.php?id='.$ligne['IDEnseignant'].'" class="btn btn-primary">Edition</a></td>
                          </tr>';
                      }
                echo' </table>
          </div>
          </div>';
      ?>
      </div>



    
</body>
</html>