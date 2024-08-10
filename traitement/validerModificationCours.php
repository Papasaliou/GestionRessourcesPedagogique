<?php
 $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_POST['libelle']) and isset($_POST['enseignant']) and isset($_GET['id']))
{
    $idC=$_GET['id'];
    $lib=$_POST['libelle'];
    $Id=$_POST['enseignant'];
    $requette2="update  cours set libelle='$lib',IdEnseignant='$Id' where idCours=$idC";
    $conn->exec($requette2);
    header("location:../ModifierCours.php");

}
?>