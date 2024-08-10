<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:etudiant.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="myCSS/style.css" />
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css" />
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css">
    <style>
        h1{text-align:center;
        margin-bottom:20px;}
    </style>

</head>
<body>
    

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
            <form class="d-flex"  role="search" >
                <input class="form-control me-2"  placeholder="Search" aria-label="Search" values="" id="cherch">
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
<div id="cont"></div>
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
            $res=$bdd->query($sql);
       echo'<div class= bannerEtudiant pt-5 d-flex justify-content-center align-items-center" >
               <div class="container pt-5  ">
               <h1 class="text-capitalize banner-desc pt-5 ">liste des resssources </h1>
                    <div class="row">
                        <div class="col-sm-12  " >';
                        while($ligne=$res->fetch())
                        {
                        echo'<div class="border-3">';
                          $ide=$ligne['Idressource']; 
                          $ressource=$ligne['fichier'];
                          $cours=$ligne['libcrs'];
                          $resse=$ligne['libres'];
                          //$libelle=$ligne['libelle'];
                          echo'<div class="card w-95 mb-4">
                          <div class=" row card-body">
                                <div class="col-lg-11">
                                    <h5 class="card-title">'.$ligne['type'].'</h5>
                                    <p class="card-text">'.$cours.':'.$resse.'</p>
                                </div>
                                <div class="col-lg-1">
                                    <a id="ah"onclick="javascript:historique()" href="EnseignantVisualiseRessources.php?url='.$ligne['fichier'].'" class="btn btn-success pl-0">Voir</a>
                                </div>
                          </div>
                      </div>';?>



<script lang="javascript">
      // var a= document.getElementById('ah');
       //console.log(a);
      // a.addEventListener('click',function()
      function historique()
      {
               
              // a.innerHTML='<div>
              <?php
              $idr=$ligne['Idressource'];
               include("dbconnection.php");
            /*  $req="select idHistorique from historique where idEtudiant=".$_SESSION['id']." and idRessource=$idr";
               $res1=$bdd->query($req);
               if($row=$res1->fetch())
               {
                
               }
               else
               {*/
                    $req="insert into historique(idRessource,idEtudiant)values($idr,".$_SESSION['id'].")";
                    $res2=$bdd->exec($req);
                    if($res2)
                    {
                        //echo"ajout";
                    }
            //  }

       ?></div>'
       }
    
       
    

       </script>





                    <?php
                    }
            echo'</div>
            </div>
       </div>
       </div>';
    ?>
      
       
</body>
</html>