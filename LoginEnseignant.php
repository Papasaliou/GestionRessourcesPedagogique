<?php
session_start();

include("dbconnection.php");

  
  
    if(isset($_POST['email'],$_POST['password']))
    {
      $email=$_POST['email'];
      $pwd=$_POST['password'];

    $req="select * from enseignant where mail=? and Mdpasse=?";
      $resulte=$bdd->prepare($req);
      $resulte->execute(array($email,$pwd));
      if($r=$resulte->fetch())
    
      {
       $_SESSION['IDEnseignant']=$r['IDEnseignant'];
       $_SESSION['NomEnseignant']=$r['nom'];
       $_SESSION['prenomEnseignant']=$r['prenom'];
    
       $_SESSION['statu']=$r['statu'];
       if($r['statu']==1)
       {
        header('location:profilEnseignantResponsable.php');
       }
       else
       {
        header("location:profilEnseignant.php");
       }


           
       
      
      }
      else
      {
          $message="login et/ou mot de passe incorrecte";
          $_SESSION['error']=$message;
      }
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
    <link rel="stylesheet" href="myCSS/style.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<?php
//include("head.php");
?>
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
                    <a class="nav-link text-light" href="LoginEnseignant.php">Espace Enseignant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="etudiant.php">Espace Etudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="LoginAdmin.php">Espace Admin</a>
                </li>
            </ul>
           
        </div>
    </div>
</nav>

<body class="bodyDLogEns ">
        <div class="form_bg">
        
        <div class="container border border-5 rounded- border-success border-opacity-75  p-2 mb-5">
            <div class="row m-auto d-flex flex-column">
              
                <form class="form-horizontal" method="post" action="" name="fo">
                    <div class="form_icon "><i class="bi bi-person-circle"></i></div>
                    <h3 class="title">Enseignant</h3>
                    <div class="form-group mb-3">
                        <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                        <input class="form-control "type="email"name="email" placeholder="entrez votre login" required>

                    </div>
                    <div class="form-group mb-3">
                        <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                        <input class="form-control "type="password"name="password" placeholder="password"maxlength='10' required >

                    </div>
                    <input type="submit" value="se connecter" class="btn" name="connecte">
                    <ul class="form-options">
                   
                </form>
                <p>
                        <?php 
                        if(isset($_POST['connecte'])){
                        if(isset($_SESSION["error"]))
                        {   echo "<p class=' col-12 bg-danger'>".$_SESSION["error"]."</p>";
                           unset($_SESSION["error"]);
                        } 
                    }
                        ?></p>
            </div>

    </div>  
       
        </div>
</body>
</html>