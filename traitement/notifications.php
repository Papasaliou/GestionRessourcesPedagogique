<?php
session_start();

if(!isset($_SESSION['niveau']) and !isset($_SESSION['prenom']) and !isset($_SESSION['nom']))
{
    header("location:../etudiant.php");
}
$niveau=$_SESSION['niveau'];
$conn=new PDO ("mysql:host=localhost;dbname=projet","root","");
//$requette="SELECT idNotification,dateNotification,res.Idressource as ressource,res.libelle as libres,type,fichier,crs.libelle as libcrs,vu FROM notification as noti JOIN ressources as res join cours as crs  ON res.idClasse=noti.idClasse and   crs.idCours=res.idCours where noti.idClasse=$niveau  ORDER BY dateNotification DESC";
$requette="SELECT idNotification,dateNotification,res.Idressource as ressource,res.libelle as libres,type,fichier,crs.libelle as libcrs,vu FROM ressources as res,notification as noti,cours as crs WHERE res.Idressource=noti.idRessource AND crs.classe=noti.idClasse AND res.idClasse=$niveau GROUP BY libres ORDER BY noti.dateNotification DESC LIMIT 5;";
$resultat=$conn->query($requette);
$ligne=$resultat->fetch();
if($ligne)
{
    $_SESSION['idNotification']=$ligne['idNotification'];
    $_SESSION['Idressource']=$ligne['ressource'];
}else
{
    header("location:../profilEtudiant.php");
}

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
                    <a class="nav-link text-light"  aria-current="page" href="../Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../profilEtudiant.php">Retour</a>
                </li>
            </ul>            
        </div>
    </div>
</nav>

<?php
    echo'<div class= bannerRessource pt-5 d-flex justify-content-center align-items-center">
      <div class="container pt-5 ">
        <div class="row">
              <div class="col-sm-12 pt-5 " >';
                      while($ligne=$resultat->fetch())
                      {
                        echo'<div class="border-3">';
                          $libelle=$ligne['libres']; 
                          $type=$ligne['type'];
                          $ressource=$ligne['fichier'];
                          $cours=$ligne['libcrs'];
                          $date=$ligne['dateNotification'];

                          echo'<div class="card w-95 mb-3">
                          <div class=" row card-body">
                          <a href="VoirNotification.php" class="btn btn-success pl-0">
                                <div class="col-lg-10">
                                
                                    <h5 class="card-title"> Vous avez recu un '.$type.' de  '.$cours.'</h5>
                                    <p class="card-text">'.$libelle.'</p>
                                   
                               
                                </div>
                                <div class="col-lg-2">  
                                <h3>'.$date.'</h3>
                                </div>
                            </a>        
                          </div>
                      </div>';
                      }
              echo' </div>
              </div>
            </div>';?>
<script src="fichierBootstrap/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>