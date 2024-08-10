<?php
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_POST['classe']) and $_POST['cours'] and isset($_POST['nom']) and isset($_POST['type']) and isset($_FILES['ressource']) and isset($_GET['idMod']))
{
    $niveau=$_POST['classe'];
    $cours=$_POST['cours'];
    $nom=$_POST['nom'];
    $type=$_POST['type'];
    $fichier=$_FILES['ressource']['name'];
    $requette="update ressources set idClasse=$niveau,idCours=$cours ,libelle='$nom',type='$type',fichier='$fichier' where idressource=".$_GET['idMod']."";
    $conn->exec($requette);
    header("location:../ModifierRessources.php");
}
else
echo'toutes les donnees ne sont pas renseignees';
?>