<?php
include("../dbconnection.php");
if(isset($_GET['idSup']))
{
    $identifiant=$_GET['idSup'];
   
    $requette1="Delete from enseignant where IDEnseignant=$identifiant";
    $res=$bdd->exec($requette1);
    header("location:traitementSuppressionEnseignant.php");
}
else
echo"erreur de suppression";
?>