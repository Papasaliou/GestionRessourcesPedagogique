<?php
session_start();
if(isset($_GET['libelle']))
{
     $lib=$_GET['libelle'];
     include("dbconnection.php");
    // $sql="select libelle ,fichier from ressources,etudiant,cours  where ressources.idCours=cours.idCours and ressources.idClasse=etudiant.idClasse and etudiant.id=".$_SESSION["id"]." and libelle like '$lib%'";
     $sql="select res.libelle as libelle,res.Idressource,crs.libelle as libcrs,type,res.fichier as fichier from ressources as res,etudiant as etu,cours as crs where res.idCours=crs.idCours and res.idClasse=etu.idClasse and etu.id=? and res.libelle like ?";
     $resultat=$bdd->prepare($sql);
     $libelle="%".$lib."%";
     $resultat->execute(array($_SESSION["id"],$libelle));
     $res=$resultat->fetch();
     //$res=$bdd->query($sql);

     //$requete="SELECT * from appartement ap join image im on ap.idApp=im.idApp where adresse like? or ville like ? or quartier like ? order by prix DESC" ;
     
      
     echo'<div class= bannerEtudiant pt-5 d-flex justify-content-center align-items-center" >
       
     <div class="container pt-5  ">
     <h1 class="text-capitalize banner-desc pt-5 ">liste des resssources </h1>
          <div class="row">
              <div class="col-sm-12  " >';
              while($res)
              {
              echo'<div class="border-3">';
                $ide=$res['Idressource']; 
                $ressource=$res['fichier'];
                //$libelle=$ligne['libelle'];
                echo'<div class="card w-95 mb-4">
                <div class=" row card-body">
                      <div class="col-lg-11">
                          <h5 class="card-title">'.$res['type'].'</h5>
                          <p class="card-text">'.$res['libcrs'].':'.$res['libelle'].'</p>
                      </div>
                      <div class="col-lg-1">
                          <a id="ah" href="EnseignantVisualiseRessources.php?url='.$res['fichier'].'" class="btn btn-success pl-0">Voir</a>
                      </div>
                </div>
            </div>';
            $res=$resultat->fetch();
            }
  echo'</div>
  </div>
</div>
</div>';
 }  
?>
