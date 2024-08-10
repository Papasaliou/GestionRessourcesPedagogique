<?php
session_start();
if(isset($_SESSION['statu']) and $_SESSION['statu']==1)
{
    header("location:../LoginAdmin.php");
}
include("dbconnection.php");
if(isset($_POST['libelle']) and isset($_GET['id']))
{
    $ident=$_GET['id'];
    
    $requette6="UPDATE `module` SET libelle='".$_POST['libelle']."' WHERE idModule= $ident";
    $bdd->exec($requette6);
    $IdMod=$bdd->lastInsertId();
    if(isset($_POST['Cours']) and isset($_POST['enseignant']))
    {
        foreach($_POST['Cours'] as $val)
        {
            $requette="select * FROM `enseignant`JOIN cours ON cours.idEnseignant=enseignant.IDEnseignant WHERE libelle='$val' ";
            $resultat =$bdd->query($requette);
            $ligne=$resultat->fetch();
            $prof=$ligne['prenom'].' '.$ligne['nom'];
            $requette7="UPDATE modulecours SET cours='$val',enseignant='$prof' WHERE idMod=$IdMod";
            $conn->exec($requette7);
            header("location:../ModifierModules.php");
        }
    }
}
else
echo'pas de libelle error';

?>
