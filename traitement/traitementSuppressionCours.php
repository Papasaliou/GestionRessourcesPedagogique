<?php
 $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_GET['idSup']))
{
    $identifiant=$_GET['idSup'];
    $requette1="Delete from cours where idCours=$identifiant";
    $conn->exec($requette1);
    header("location:../SupprimerCours.php");
}
else
echo"erreur de suppression";
?>