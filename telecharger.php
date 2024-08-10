<?php

session_start();
if(empty($_SESSION['id']))
{
    header("location:etudiant.php");
}

if(isset($_GET['urll']))
{$url=$_GET['urll'];
     header("Cache-Control:public");
     header("Content-Disposition:attachement;filename='".basename($url).'"');
   header('Content-type: application/pdf');
   header('Content-Lenght:'.filesize($urll));
   header("Content-Transfert-Encoding:binary");
   readfile($urll);
   exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="myCSS/style.css" />
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <div>
    <nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center" style="background-color:green">
    <div class="container-fluid">
    
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="profilEtudiant.php">Retour</a>
                </li>
            </ul>            
        </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2"  placeholder="Search" aria-label="Search" id="cherch">
  
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search" style="color: beige;"></i></button>
            </form>
            <ul class="navbar-nav " >
            <li class="nav-item">
                    <a class="nav-link text-light btn btn-outline-danger" href="deconnexion.php">Deconnexion</a>
                </li>
            </ul>
    </form>
    </div>
</nav>
    </div>

    <div id="cont"></div>
    <script>
      var cont=document.getElementById('cont');
        
         var cherch=document.getElementById('cherch');
        
         cherch.addEventListener('keyup',function(e){
           // rep.innerHTML=qtr.value
            let url="rechercheTelechargement.php?libelle="+cherch.value;
            var obj=new XMLHttpRequest();
            obj.open('GET',url)
            obj.send(null);
            obj.onreadystatechange=function(){
                if(obj.readyState==obj.DONE && obj.status==200)
                {
                    cont.innerHTML=obj.responseText;
                }
            }
         },false)

         cont.addEventListener("keydown",function(){
        var objet1=new XMLHttpRequest();
        objet1.onreadystatechange=function(){
            if(objet1.readyState==4 && objet1.status==200)
            {
                cont.innerHTML=objet1.responseText;
            } 
        }
        objet1.open("GET","consulterCours.php");
        objet1.send();
    },false);

    </script> 
<?php
include("dbconnection.php");
   
  $sql="select Idressource,fichier,type,cours.libelle as libcrs,ressources.libelle as libres from ressources,etudiant,cours  where ressources.idCours=cours.idCours and ressources.idClasse=etudiant.idClasse and etudiant.id=".$_SESSION["id"]."";
      // $sql="select * from ressources,etudiant,cours  where ressources.idCours=cours.idCours and ressources.idClasse=etudiant.idClasse and etudiant.id=".$_SESSION["id"];
       //var_dump($sql);
       $res=$bdd->query($sql);
       echo'<div class= bannerEtudiant pt-5 d-flex justify-content-center align-items-center" >
       
               <div class="container pt-5  ">
                    <div class="row">
                        <div class="col-sm-12  pt-5" >';
                        while($ligne=$res->fetch())
                        {
                        echo'<div class="border-3 ">';
                          $ide=$ligne['Idressource']; 
                          $ressource=$ligne['fichier'];
                          //$libelle=$ligne['libelle'];
                          echo'<div class="card w-95 mb-4 bg-success ">
                          <div class=" row card-body  ">
                                <div class="col-lg-10 " style="color: light;">
                                    <h5 class="card-title text-light">'.$ligne['type'].'</h5>
                                    <p class="card-text text-light">'.$ligne['libcrs'].':'.$ligne['libres'].'</p>
                                </div>
                                <div class="col-lg-2">
                                    <a id="ah" href="telecharger.php?urll='.$ligne['fichier'].'" class="btn btn-light  pl-0">Telecharger</a>
                                </div>
                          </div>
                      </div>';
                      }
            echo'</div>
            </div>
       </div>
       </div>';


       
     /*
       echo"<table class='table  table-bordered' style='background-color:beige;color:green;'>";
       echo"<thead style='color:beige;' background-color:green;'>";
       echo"<th>";
       echo"COURS";
       echo"</th>";
       echo"<th>";
       echo"Ressources";
       echo"</th>";
      
       echo"</thead>";
       echo"<tbody>";
     while($row=$res->fetch())
     {
       $id=$row[0];
       echo"<tr>";
       echo"<td>$row[libelle]</td>";

       echo"<td><a href='telecharger.php?urll=$row[fichier]'>$row[fichier]</a></td></tr>";
      
    //    echo"<td>$row[prenom]</td>";
    //    echo"<td>$row[mail]</td>";
    //    echo"</tr>";
     }       */
       ?>
        <script lang="javascript">
       var a= document.getElementById('ah');
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
       },true)
    </script>
</body>
   
