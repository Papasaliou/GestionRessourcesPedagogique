<?php
session_start();
include("dbconnection.php");

  
  
    if(isset($_POST['email'],$_POST['password']))
    {
      $email=$_POST['email'];
      $pwd=$_POST['password'];

    $req="select * from admin where login=? and password=?";
      $resulte=$bdd->prepare($req);
      $resulte->execute(array($email,$pwd));
      if($row=$resulte->fetch())
    
      {
       
        $_SESSION['idAdmin']=$row['idAdmin'];

        header("location:pageAdmin.php");
       
      
      }
      else
      {
          header("location:LoginAdmin.php");
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
<body class="bodyDLogEns" style="color:white;">
<div class="form_bg">
        <div class="container border border-5 rounded- border-success border-opacity-75  p-2 mb-5">
            <div class="row m-auto d-flex flex-column">
              
                <form class="form-horizontal" method="post" action="" name="fo">
                    <div class="form_icon "><i class="bi bi-person-circle"></i></div>
                    <h3 class="title">Admin</h3>
                    <div class="form-group mb-3">
                        <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                        <input class="form-control "type="email"name="email" placeholder="entrez votre login" required>

                    </div>
                    <div class="form-group mb-3">
                        <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                        <input class="form-control "type="password"name="password" placeholder="password"maxlength='10' required >

                    </div>
                    <input type="submit" value="se connecter" class="btn" name="connecte">
                   
                </form>
            </div>

        </div>
    </div>
</body>
