
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


<?php
include("dbconnection.php");
      $requette="select * from module join modulecours on modulecours.Idmod=module.idModule";
      $result=$bdd->query($requette);
      echo'<div class="incontentsup">
      <div id="corps" class="container-fluid">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover ">
                      <tr class="bg-seccess bg-info">
                      <th>UE</th>
                      <th>Cours</th>
                      <th>Enseignants</th>
                      <th>Edition</th>

                      </tr>';
                      while($ligne=$result->fetch())
                      {
                          $ide=$ligne['idModule'];
                      echo'<tr>
                      <td>'.$ligne['libelle'].'</td>
                      <td>'.$ligne['cours'].'</td>
                      <td>'.$ligne['enseignant'].'</td>
                              <td><a href="traitement/traitementModificationModule.php?idModi='.$ligne['idModule'].'" class="btn btn-primary">Editer</a></td>
                          </tr>';
                      }
                echo' </table>
          </div>
          </div>';
      ?>
      </div>
</body>
</html>