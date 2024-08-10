<?php
session_start();
if(session_destroy())
{
    header("location:etudiant.php");
}
?>