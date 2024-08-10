<?php
include_once("dbconnection.php");
if(isset($_POST['email']) and filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

{
    $email=$_POST['email'];

    $req="select id from etudiant where email='$email'";
    $res=$bdd->query($req);
    if($row=$res->fetch())
    {
       echo"email exist deja ";
    }
    else
        {
            
        if(isset($_POST['prenom'],$_POST['nom'],$_POST['password'],$_POST['cpassword'],$_POST['numerocarte'],$_POST['datenaissance']))
        {
              $prenom = $_POST["prenom"]; 
              $nom=$_POST["nom"];
              $num=$_POST['numerocarte'];
              $password = $_POST["password"]; 
              $cpassword = $_POST["cpassword"];
              $date=$_POST['datenaissance'];
              $niveau=$_POST['niveau']; 
              if(isset($_FILES['image']))
              {
                $photo=$_FILES['image']['name'];
                $upload="images/".$photo;
                move_uploaded_file($_FILES['image']['tmp_name'],$upload);
              
              if($password==$cpassword)
               {
              
                  // $sql = "insert into users values (null,`$prenom`,`$nom`,`$email`,`$date`,`$num`,`$niveau`
                  // `$password`, current_timestamp()),`$photo`";
                  //  $result=$bdd->exec($sql);
                  //  if($result)
                  //  {
                  //   echo"ajout AVEC SUCCESS";
                  //  }
              

                $inser="insert into inscriptionetudiant(prenom,nom,email,password,numerocarte,datenaissance,image,idClasse) values(:prenom,:nom,:email,:password,:num,:date,:photo,:niveau)";
                $ress=$bdd->prepare($inser);
                $ress->execute(array('prenom'=>$prenom,'nom'=>$nom,'email'=>$email,'password'=>$password,'num'=>$num,'date'=>$date,'photo'=>$photo ,'niveau'=>$niveau));
                if($ress)
                {
                  
                 header("location:pageinscriptionEtud.php");
                 $message="le nom d`utilisateur ou le mot de passe est incorrecte";
                 $_SESSION['error']=$message;
                }
                  
                

              }
            
            }
        }

        }
}
?>