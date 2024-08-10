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
                    <a class="nav-link text-light"  aria-current="page" href="../pageAdmin.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="../pageClasse.php">Classe</a>
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
 
</div>
<section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 ">
    <div class="row">
        <div class="col-lg-6 ">

<div class="formAjoutEnseignant">
            <div class="titreE">Ajout d'un Enseignant</div>
            <div class="traitE"></div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <p class="form-groupe"><input  class="form-control" type="text" name="nom" placeholder="Nom" required></p>
                <p class="form-groupe"><input  class="form-control" type="text" name="prenom"  placeholder="Prenom" required></p>
                <p class="form-groupe"><input  class="form-control" type="email" name="mail"  placeholder="E-Mail" required></p>
                <p class="form-groupe"><input  class="form-control" type="password" name="password"  placeholder="Mot de passe" required></p>
                <p class="form-group"><select class="form-select form-control" name="statu" aria-label="Default select exemple" required>
                  <option value=""> je suis reponsable</option>
                  <option value="1"> OUI</option>
                  <option value="0"> NON</option>
                </select>
                </p>
               
                <div class="formfoot">
                  <input class=" btn btn-info" type="submit" value="envoyer" name="envoyer">
                  <input type="reset" class="btn btn-danger" value="annuler">
                </div>
            </form>
            <?php
            if(isset($_SESSION['error']))
            {
              echo$_SESSION['errror'];
              unset($_SESSION['error']);
            }
            ?>
        </div>
</div>
</div>
</div>
</div>

</section>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['idAdmin']))
{
  header('location:../LoginAdmin.php');
}
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");

if(isset($_POST['envoyer'])){
if(isset($_POST['nom']) and $_POST['prenom'] and isset($_POST['mail'])  and isset($_POST['password']) and isset($_POST['statu']))
{
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];


$mdpass=$_POST['password'];
$statu=$_POST['statu'];
$requette="insert into enseignant(nom,prenom,mail,Mdpasse,statu) values('$nom','$prenom','$mail','$mdpass',$statu)";
  $res=$conn->exec($requette);
  if($res)
  {
    $_SESSION['error']="ajout reussi avec success";
}
}
}
?>
