<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="../fichierBootstrap/myCSS/monStyle.css">
    <link href="../fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body >
    
   
</body>
</html>
<?php

include("../dbconnection.php");
$requette5="select nom,prenom,libelle from cours join enseignant on enseignant.IDEnseignant=cours.idEnseignant";
$resultat=$bdd->query($requette5);
if(isset($_GET['idModi']))
{
    $id=$_GET['idModi'];
    $requette="select * from module where idModule=$id";
    $result=$bdd->query($requette);
    $row=$result->fetch();


echo'<div class="formRessource">
<div class="titreR">Ajout des Modules</div>
<div class="traitR"></div>
<form action="valider_modification.php?id='.$id.'" method="post" enctype="multipart/form-data">';

while($ligne=$resultat->fetch())
{
   $enseignant=$ligne['prenom'].' '.$ligne['nom'];
   
   echo'<div id="Dforme" class" d-flex"><div class="  form-groupe">'.$enseignant.'<input  class="" type="checkbox" name="enseignant[]" value="'.$enseignant.'" ></div>';
   echo'<div class=" Dforme form-groupe">'.$ligne['libelle'].'<input  class="" type="checkbox" name="Cours[]" value="'.$ligne['libelle'].'"  ></div></div>';
}  
echo'
    <p class="form-groupe"> <input class="form-control" type="text" name="libelle" value="'.$row['libelle'].'"  placeholder="Libelle"></p>
    <input class="form-control btn btn-danger" type="submit" value="envoyer">
</form>
</div>';
}
?>