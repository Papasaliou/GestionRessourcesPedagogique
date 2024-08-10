
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="myCSS/style.css" />
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap_icone/bootstrap-icons.css">

    
</head>
<body>
  
    
     <?php
    include("menu.php");
    ?>
   
<div class="form_bg bodyDLogEtudI">
        <div class="container border border-5 rounded- border-success border-opacity-75  p-2 mb-2">
            <div class="row m-auto d-flex flex-column">

                <form id="fo" class="form-horizontal" method="post" action="traiter.php" enctype="multipart/form-data">
                    <div class="form_icon"><i class="bi bi-person-circle"></i></div>
                    <h3 class="title">creer un compte</h3>
                  
                    <section class="d-flex p-5 m-4">
                      <article class="m-1 mb-3">
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                        <input class="form-control"type="text"name="prenom" placeholder="prenom" required>

                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                        <input class="form-control "type="text"name="nom" placeholder="nom"required>

                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-envelope-fill"></i></span>
                        <input class="form-control "type="email"name="email" placeholder="email" required>

                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-calendar2-date-fill"></i></span>
                        <input class="form-control "type="date"name="datenaissance" placeholder="date de naissance"required>

                    </div>
                    </article class="m-1">
                   <article>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-person-badge-fill"></i></span>
                        <input class="form-control "type="text"name="numerocarte" placeholder="Numero carte etudiant" required>

                    </div>
                    
                 <div class="form-group">
                 <span class="input-icon"><i class="bi bi-mortarboard-fill"></i></i></span>
                   <select id="selection" class="form-control form-select" name="niveau"required >
                    <?php 
                  
                    
                    include("dbconnection.php");
                    $reqq="select niveau,idClasse from classe";
                    $res=$bdd->query($reqq);
                    while($row=$res->fetch())
                    {
                        
                        ?>
                       <option value="<?php echo$row['idClasse']?>"><?php echo$row['niveau']?></option> ";
                    <?php
                    
                    // var_dump($_SESSION['idClasse']);

                    }
                    ?>
                 <!--  <optgroup label=Licence>
                   <option value= "" >Niveau<option>
                     <option value= "licence1" >licence 1<option>
                    <option value= "licence2" > licence 2 <option>
                    <option value= "licence3" > licence 3<option>
                    </optgroup>
                    <optgroup label="Master 1">
                    <option value= "SIR" >SIR<option>
                    <option value= "RETEL" > RETEL<option>
                    </optgroup>
                    <optgroup label="Master 2">
                    <option value= "SIR" >SIR<option>
                    <option value= "RETEL" > RETEL<option>
                    <option value= "Genie-Logiciel" > Genie Logiciel<option>
                    <option value= "Bio-Informatique" >Bio-Informatique<option>
                    <option value= "BI" >BI<option>
                    </optgroup> --->
                    </select>
                 </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                        <input class="form-control"type="password"name="password" placeholder="mot de passe"maxlength="10" id="mdp" required>

                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                        <input class="form-control" id="cpassword"type="password"name="cpassword" placeholder="confirmer mot de passe" maxlength="10" required>
                        <span id="message"></span>

                    </div>
                    </article>

                    </section>
                    <div class="form-group">
                        <span class="input-icon"><i class="bi bi-person-badge-fill"></i></span>
                        <input type="file"name="image" class="form-control-file form-control" accept="images/*">

                    </div>

                    <input type="submit"class="btn signin"value="s`inscrire" name="inscrire">
                    
                </form>
                <p>
                        <?php 
                        if(isset($_SESSION["error"]))
                        {   echo $_SESSION["error"];
                            unset($_SESSION["error"]);
                        } 
                        ?></p>
                <script src="mdp.js"></script>
            </div>

        </div>
    </div>
</body>
</html>

