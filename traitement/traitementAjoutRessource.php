<?php

include("Mesfonctions.php");
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
//if($conn)
//echo"connection etablit";
//else
//echo"pas de connection";
if(isset($_POST['nom']) and isset($_POST['type']) and isset($_FILES['ressource']) and isset($_POST['classe']) and isset($_POST['cours']))
{
  $path="mesRessources";
    $nomsrc=$_FILES['ressource']['tmp_name'];
    $nom=$_FILES['ressource']['name'];
    if(check_img_ext($nom))
    {
      $destination=move_file($nomsrc,$path,$nom);
      if($destination==null)
        echo"null";
      else
        $libelle=$_POST['nom'];
        $type=$_POST['type'];
        $classe=$_POST['classe'];
        $cours=$_POST['cours'];
        $req1="insert into ressources(libelle,type,fichier,idClasse,idCours) values('$libelle','$type','$destination',$classe,$cours)";
        $result=$conn->exec($req1);
        $id=$conn->lastInsertId();
        $requette12="insert into notification (idRessource,idClasse,vu) values ($id,$classe,0)";
        $conn->exec($requette12);
         header('location:../AjoutRessources.php');
    }
    else
    {
        echo"mauvais extention";
    }
}
else
echo'tous les champs ne sont pas renseigne';
?>