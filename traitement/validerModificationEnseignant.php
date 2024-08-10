<?php
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_POST['nom']) and $_POST['prenom'] and isset($_POST['mail'])  and isset($_POST['password']) and isset($_POST['statu']) and isset($_GET['id']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];
  
    $mdpass=$_POST['password'];
    $statu=$_POST['statu'];
    $requette="update enseignant set nom='$nom',prenom='$prenom' ,mail='$mail',Mdpasse='$mdpass',statu=$statu where IDEnseignant=".$_GET['id']."";
    $conn->exec($requette);
    header("location:traitementModificationEseignant.php");
}
?>