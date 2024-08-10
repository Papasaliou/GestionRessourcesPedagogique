<?php
 include("../dbconnection.php");
if(isset($_GET['idSup']))
{
    $identifiant=$_GET['idSup'];
    $requette1="Delete from  module where idModule=$identifiant";
   $bdd->exec($requette1);
    header("location:../SupprimerModules.php");
}
else
echo"erreur de suppression";
?>