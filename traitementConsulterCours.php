<?php
session_start();
if(empty($_SESSION['id']))
{
    header("location:etudiant.php");
}

if(isset($_GET['url']))
{
   
    $url=$_GET['url'];
    header("location:traitement/".$url."");
  // var_dump($url);
//    header('Content-type: application/pdf');
//    header('Content-Lenght:'.filesize($url));
//    readfile($url);
// }
}
?>
   
