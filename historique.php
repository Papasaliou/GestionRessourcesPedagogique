
 <?php
     session_start();
     if(!isset($_SESSION['IDEnseignant']))
     {
          header("location:LoginEnseignant.php");
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
     section
     {
          display:flex;
          
     }
     .H1{text-align:center;}
    </style>

</head>
<body>
<nav class="navbar navbar-dark bg-success fixed-top"  style="color: green;">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><i class="bi bi-person-check-fill"></i><p><?php if(isset($_SESSION['IDEnseignant']) and isset($_SESSION['NomEnseignant']) and isset($_SESSION['prenomEnseignant'])) { echo $_SESSION['prenomEnseignant'].' '.$_SESSION['NomEnseignant'];}?></p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="bi bi-list"></i>Menu de Navigation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body"style="color: green;" >
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
          <li class="nav-item"  >
            <a class="nav-link active text-success "  aria-current="page" href="Accueil.php">Home</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="PageEnseignants.php">Gestion des Enseignants</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link active text-success " aria-current="page" href="pageClasse.php">Gestion des Classe</a>
          </li>
        <ul class="navbar-nav navbar-right" >
            <li class="nav-item">
                    <a class="nav-link btn btn-outline-danger text-success " href="deconnexionAdmin.php">Deconnexion</a>
                </li>
            </ul>
      </div>
    </div>
  </div>
</nav> 
           
     <?php
    
     include("dbconnection.php");
     $req="select * from historique,etudiant,ressources,cours where etudiant.id=historique.idEtudiant and ressources.Idressource=historique.idRessource and 
     cours.idCours=ressources.idCours and cours.idEnseignant=".$_SESSION['IDEnseignant']." ORDER BY dateHisto DESC; ";
     $res=$bdd->query($req);
     
     echo'<div class="incontentsup">
     <div id="corps" class="container-fluid">
     <h2 class="pt-5 pb-3 H1 titreE">Historique d`Acces aux Ressources</h2>
         <div class="row">
             <div class="col-sm-12  " >
                 <table class="table table-bordered table-striped table-hover " style="background-color:beige;color:green;">
                     <tr class=" " style="background-color:green;color:beige;">
                      
                         <th>nom</th>
                         <th>prenom</th>
                         <th>Numero carte</th>
                         <th>Libelle</th>
                         <th>date d`acces au ressource</th>
                     </tr>';
                     while($ligne=$res->fetch())
                     {
                         //$ide=$ligne['IDEnseignant'];
                     echo'<tr>
                             <td>'.$ligne['prenom'].'</td>
                             <td>'.$ligne['nom'].'</td>
                             <td>'.$ligne['numerocarte'].'</td>
                             <td>'.$ligne['libelle'].'</td>
                             <td>'.$ligne['dateHisto'].'</td>
                         </tr>';
                     }
               echo' </table>
         </div>
         </div>';
     ?>
     </div>  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
</body>
</html>
