<?php
$conn=new PDO("mysql:host=localhost;dbname=projet","root","");
if(isset($_GET['idAjout']))
{
    $id=$_GET['idAjout'];
    $requette1="select * from inscriptionetudiant where id=$id";
    $result=$conn->query($requette1);
    $ligne=$result->fetch();

    $nom=$ligne['nom'];
    $prenom=$ligne['prenom'];
    $email=$ligne['email'];
    $datenaissance=$ligne['datenaissance'];
    $numerocarte=$ligne['numerocarte'];
    $password=$ligne['password'];
    $date=$ligne['date'];
    $niveau=$ligne['idClasse'];
    $requette2="insert into etudiant (prenom,nom,email,datenaissance,numerocarte,password,date,idClasse) values('$prenom',' $nom',' $email','$datenaissance','$numerocarte','$password',' $date','$niveau')";
    $res=$conn->exec($requette2);
    $requette3="delete from inscriptionetudiant where id=$id";
    if($res)
    {
        $conn->exec($requette3);
    }
    header("location:ApprouverDemande.php");
}
if(isset($_GET['idSupp']))
{
    $id=$_GET['idSupp'];
    $requette4="delete from inscriptionetudiant where id=$id";
    $result=$conn->exec($requette4);
    header("location:ApprouverDemande.php");
}
?>