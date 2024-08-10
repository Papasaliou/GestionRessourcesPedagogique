<?php
 $conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_GET['idSup']))
{
    $identifiant=$_GET['idSup'];
    $requette1="Delete from ressources where Idressource=$identifiant";
    $conn->exec($requette1);
    header("location:../SupprimerRessource.php");
}
else
echo"erreur de suppression";
?>