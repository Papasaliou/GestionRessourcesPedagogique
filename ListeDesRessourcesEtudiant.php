<?php
session_start();
if(!isset($_SESSION['niveau']))
{

}
$niveau=$_SESSION['niveau'];
if(!isset($_SESSION['id']))
{
    header("location:etudiant.php");
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
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="profilEtudiant.php">Retour</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="cherch">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div id="cont"></div>
    </div>
                 
    <script>
          var cont=document.getElementById('cont');
        
         var cherch=document.getElementById('cherch');
        
         cherch.addEventListener('keyup',function(e){
           // rep.innerHTML=qtr.value
            let url="recherche.php?libelle="+cherch.value;
            var obj=new XMLHttpRequest();
            obj.open('GET',url)
            obj.send(null);
            obj.onreadystatechange=function(){
                if(obj.readyState==obj.DONE && obj.status==200)
                {
                    cont.innerHTML=obj.responseText
                }
            }
         },false)

    </script> 


<section class="bannerEtudiant pt-0 d-flex justify-content-center align-items-center">
    <div class="container ">
      <div class="row">
      <<h1 class="text-capitalize banner-desc">liste des resssources </h1>


      <?php

//$req="select * from etudiant where password=?";
//$resulte=$bdd->prepare($req);
//$resulte->execute(array($pwd));

      $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
      $requette="select * from  ressources where idClasse=?";
      $result=$conn->prepare($requette);
      $result->execute(array($niveau));
      echo'<div class="incontentsup">
      
      <div id="" class="container-fluid">
      
          <div class="row">
              <div class="col-sm-12  " >';
              $entier=0;
                      while($ligne=$result->fetch())
                      {
                        $entier++;
                        echo'<div class="border-3">';
                          $ide=$ligne['Idressource']; 
                          $ressource=$ligne['fichier'];
                          echo'<div class="card w-95">
                          <div class=" row card-body">
                                <div class="col-lg-11">
                                    <h5 class="card-title">'.$ligne['type'].'</h5>
                                    <p class="card-text">'.$ligne['libelle'].'</p>
                                </div>
                                <div class="col-lg-1">
                                    <a id="ah'.$entier.'" href="EnseignantVisualiseRessources.php?url='.$ligne['fichier'].'" class="btn btn-success pl-0">Voir</a>
                                </div>
                          </div>
                      </div>';
                      }
               echo'</div>
            </div>
       </div>';
      ?>


<script lang="javascript">
    var a= document.getElementById("ah<?phpecho$entier?>");
       //console.log(a);
      a.addEventListener('click',function(){
               
               a.innerHTML='<div><?php
               $idr=$row['Idressource'];
               include("dbconnection.php");
               $req="select idHistorique from historique where idEtudiant='$_SESSION[id]' and idRessource='$idr'";
               $res=$bdd->query($req);
               if($row=$res->fetch())
               {
                
               }
               else{
               $req="insert into historique(idRessource,idEtudiant)values($idr,$_SESSION[id])";
            
               $res=$bdd->exec($req);
               if($res)
               {
                //echo"ajout";
               }
            }

       ?></div>'
       },false);
        </div>
      </div>
  </section>
</body>
</html>