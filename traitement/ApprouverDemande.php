
<?php
session_start();
if(!isset($_SESSION['IDEnseignant']))
{
    header("location:LoginEnseignant.php");
}
$identifiant=$_SESSION['IDEnseignant'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="../fichierBootstrap/myCSS/monStyle.css">
    <link href="../fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
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
            <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
                </li>
            </ul>
        </div>
       
</nav>

<div class="container pt-5">

    
      <?php
      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="SELECT id, cla.IDEnseignant as IDEnseignant,ins.nom as nom,ins.prenom as prenom,ins.email as email, ins.datenaissance as datenaissance,ins.numerocarte as numerocarte, ins.password as password,ins.date as date, ins.idClasse as idClasse FROM enseignant as ens,classe as cla,inscriptionetudiant as ins WHERE ens.IDEnseignant=cla.IDEnseignant and cla.idClasse=ins.idClasse and cla.IDEnseignant=$identifiant";
      $result=$conn->query($requette);
      echo'
      <div class="container-fluid Divcorps">
          <div class="row">
              <div class="col-sm-12  " >
                  <table class="table table-bordered table-striped table-hover align-middle  ">
                      <tr class="bg-success">
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>E-mail</th>
                          <th>naissance</th>
                          <th>Numero </th>
                          <th> Date </th>
                          <th>Password</th>
                          <th>Niveau</th>
                          <th>Ajouter</th>
                          <th>Supprimer</th>
                      </tr>';
                      while($ligne=$result->fetch())
                      {
                          $nom=$ligne['nom'];
                          $prenom=$ligne['prenom'];
                          $email=$ligne['email'];
                          $datenaissance=$ligne['datenaissance'];
                          $numerocarte=$ligne['numerocarte'];
                          $password=$ligne['password'];
                          $date=$ligne['date'];
                          $niveau=$ligne['idClasse'];

                      echo'<tr>
                              <td>'.$nom.'</td>
                              <td>'.$prenom.'</td>
                              <td>'.$email.'</td>
                              <td>'.$datenaissance.'</td>
                              <td>'.$numerocarte.'</td>
                              <td>'.$password.'</td>
                              <td>'.$date.'</td>
                              <td>'.$niveau.'</td>
                              <td><a href="traitementApprouverInscription.php?idAjout='.$ligne['id'].'" class="btn btn-info">Ajouter</a></td>
                              <td><a href="traitementApprouverInscription.php?idSupp='.$ligne['id'].'" class="btn btn-danger">Supprimer</a></td>
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