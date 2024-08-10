<?php
include("../dbconnection.php");
if(isset($_GET['idA']))
{
    $identifiant=$_GET['idA'];
    $requette1="select * from inscriptionEnseignant where IdEnseingnant=$identifiant";
    $resultat=$bdd->query($requette1);
    $ligne=$resultat->fetch();
    $nom=$ligne['nom'];
    $prenom=$ligne['prenom'];
    $login=$ligne['mail'];
    $Mdpass=$ligne['Mdpasse'];
    $requette2="Insert Into enseignant values('$nom','$prenom','$login','$Mdpass')";
    $bdd->exec($requette2);
    $requette3="delete from inscriptionEnseignant where IdEnseignant=$identifiant";
    header("location:../listeEnseignant.php");
}
?>