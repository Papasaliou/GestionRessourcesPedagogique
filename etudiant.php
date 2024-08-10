<?php
session_start();


include("dbconnection.php");

  if(isset($_POST['connecte']))
  {
    if(isset($_POST['email']) and isset($_POST['password']))
    {
      $email=$_POST['email'];
      $pwd=$_POST['password'];

      $req="select * from etudiant where password=?";
      $resulte=$bdd->prepare($req);
      $resulte->execute(array($pwd));
      
    //   $b=$resulte->fetch();
    //   var_dump($b);
    //   die();
    
      $b=$resulte->fetch();
      if($b)
      {
        $_SESSION['email']=$b['email'];
        $_SESSION['password']=$b['password'];
        $_SESSION['id']=$b['id'];
        $_SESSION['prenom']=$b['prenom'];
        $_SESSION['nom']=$b['nom'];
        $_SESSION['numerocarte']=$b['numerocarte'];
        $_SESSION['niveau']=$b['idClasse'];
         //var_dump($b);
        header("location:profilEtudiant.php");
      }
      else
      {
         $message="le nom d`utilisateur ou le mot de passe est incorrecte";
         $_SESSION['error']=$message;
         
      }
    } 
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css">
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
   
<?php
   include("menu.php");
    ?>


    <div class="form_bg bodyDLogEtud">
        <div class="container border border-5 rounded- border-success border-opacity-75  p-2 mb-5">
            <div class="row m-auto d-flex flex-column">
              
                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="fo">
                    <div class="form_icon "><i class="bi bi-person-circle"></i></div>
                    <h3 class="title">Etudiant</h3>
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
                        <li><a href="mdp.php">mot de passe oublié</a></li>
                        <li><a href="pageinscriptionEtud.php">vous n`avez pas de compte ?Inscriez-vous <i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                    <p>
                        <?php 
                        if(isset($_SESSION["error"]))
                        {   echo $_SESSION["error"];
                            unset($_SESSION["error"]);
                        } 
                        ?></p>
                </form>
            </div>

        </div>
    </div>
    
</body>
</html>
<?php


?>
