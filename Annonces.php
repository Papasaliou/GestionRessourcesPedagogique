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
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center nav-justified" style="background-color:green;">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil<span>></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="AnnoncesEnseignant.php">Annonces<span>></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="profilEnseignant.php">Retour<span>></span></a>
                </li>
               
            </ul>
        </div>
        
        <ul class="navbar-nav navbar-right " >
          <li class="nav-item">
            <a class="nav-link text-light btn btn-outline-danger" href="deconnexionRES.php">Deconnexion</a>
          </li>
        </ul>
</div>

</div>
</nav>
<body class="pt-5">
    <?php
    $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
    $requette="select * from classe,cours where cours.idEnseignant=$identifiant AND classe.idClasse=cours.classe;";
    $resultat= $conn->query($requette);


    ?>
    
<div class="form_bg bodyAnnonce pt-5">
        <div class="container border border-5 rounded- border-success border-opacity-75  p-2">
            <div class="row m-auto d-flex flex-column">
                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="fo">
                    <h3 class="title titreR" style="color:green;">Faire une annonce</h3>
                    <div class="form-group mb-3">
                        <p class="form-groupe">
                            <select class="form-select"  name="classe" aria-label="Default select example">
                            <option selected >Choisir Une Classe</option>
                            <?php
                            while($ligne=$resultat->fetch())
                            {
                                $classe=$ligne['niveau'];
                            echo' <option value="'.$ligne['idClasse'].'"> '.$classe.'</option>';
                            }
                            ?>
                            </select>
                        </p>
                    </div>
                    </p>
                    <p class="form-groupe"><textarea name="commentaire" placeholder="Annonce" cols="118" rows="8" required> </textarea></p>
                    <p class="form-groupe"> <input type="submit" value="Lancer" class="form-control btn btn-success" name="submit"></p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['classe']) and isset($_POST['commentaire']))
{
    $niveau=$_POST['classe'];
    $note=$_POST['commentaire'];
    $requette1="insert into annonces (mots,IDEnseignant,idClasse) values (?,?,?)";
    $result=$conn->prepare($requette1);
    $result->execute(array($note,$identifiant,$niveau));
}
?>