<?php
 $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_GET['idMod']) and isset($_POST['niveau']) and isset($_POST['annee']) and isset($_POST['identifiant']))
{
    $identifiant=$_GET['idMod'];
    $niveau=$_POST['niveau'];
    $annee=$_POST['annee'];
    $enseignant=$_POST['identifiant'];
    $requette1="update classe set niveau='$niveau', annee=$annee,IDEnseignant=$enseignant where idClasse=$identifiant";
    $conn->exec($requette1);
    header("location:../ModifierClasse.php");
}
else
echo"erreur de suppression";