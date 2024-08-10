<?php
include("../dbconnection.php");
if(isset($_GET['idEtud']))
{
    $identifiant=$_GET['idEtud'];
   
    $requette1="Delete from etudiant where id=$identifiant";
    $res=$bdd->exec($requette1);
    // var_dump($res);
    // die();
    header("location:traitementSuppressionEtudiant.php");
}
else
echo"erreur de suppression";
?>