<?php
session_start();
include("dbconnection.php");
if(isset($_GET['libelle']) and isset($_SESSION['id']))
{
    $lib=$_GET['libelle'];
     $sql="select res.libelle as libelle,res.Idressource,crs.libelle as libcrs,type,res.fichier as fichier from ressources as res,etudiant as etu,cours as crs where res.idCours=crs.idCours and res.idClasse=etu.idClasse and etu.id=? and res.libelle like ?";
     $resultat=$bdd->prepare($sql);
     $libelle="%".$lib."%";
     $resultat->execute(array($_SESSION["id"],$libelle));
     $res=$resultat->fetch();
    echo'<div class= bannerEtudiant pt-5 d-flex justify-content-center align-items-center" >
               <div class="container pt-5  ">
                    <div class="row">
                        <div class="col-sm-12  pt-5" >';
                        while($res)
                        {
                        echo'<div class="border-3 ">';
                          $ide=$res['Idressource']; 
                          $ressource=$res['fichier'];
                          //$libelle=$ligne['libelle'];
                          echo'<div class="card w-95 mb-4 bg-success ">
                          <div class=" row card-body  ">
                                <div class="col-lg-10 color-light">
                                    <h5 class="card-title">'.$res['type'].'</h5>
                                    <p class="card-text">'.$res['libcrs'].':'.$res['libelle'].'</p>
                                </div>
                                <div class="col-lg-2">
                                    <a id="ah" href="telecharger.php?urll='.$res['fichier'].'" class="btn btn-light  pl-0">Telecharger</a>
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