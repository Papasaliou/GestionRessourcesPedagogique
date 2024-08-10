<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="myCSS/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap_icone/bootstrap-icons.css">
</head>
<body>
  <?php
  //include_once("head.php");
  ?>
<div class="form_bg container">
<div class="row m-auto d-flex flex-column">
              
              <form class="form-horizontal" method="post" action="" name="fo">
                  <div class="lock"><i class="bi bi-lock-fill"></i></div>
                  <h3 class="title">mot de passe oublie?</h3>
                  <div class="form-group mb-3">
                      <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                      <input class="form-control "type="email"name="email" placeholder="Entrez votre login" required>

                  </div>
                  <input type="submit" value="se connecter" class="btn" name="connecte">
                </form>
</div>
</div>
</body>
</html>
<?php
include("dbconnection.php");
if(isset($_POST['email']))
{
    $password=uniqid();
   // $hashpassword=password_hash($password,PASSWORD_DEFAULT);

    $message="Bonjour votre nouveau mot de passe : $password";
    $headers='Content-Type:text/plain;charset="utf-8"';" ";
   if(mail($_POST['email'],'Mot de passe oublie',$message,$headers))

   {
    $sql="update etudiant set password=? where email=?";
    $res=$bdd->prepare($sql);
    $res->execute(array($password,$_POST['email']));
    if($res)
      echo'mot de passe change avec succes';
     //s header("loc")

   }



}
?>