<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="../fichierBootstrap/myCSS/monStyle.css">
    <link href="../fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
    <title>Document</title>
</head>
<body>
    <section class="bannerValiderSuppRessource d-flex justify-content-center align-items-center w-100">
            <div class="row">
                <div class="col-sm-12  py-5" >';
                    <div class="formRessource">
                    <div class="titreR">Voulez vous Continuer</div>
                    <div class="traitR"></div>
                    <div class="d-flex justify-content-center">
                        <div class="me-5"><a <?php if(isset($_GET['idSup'])) 
                        echo'href="traitementSuppressionRessources.php?idSup='.$_GET['idSup'].'"';?> class="btn btn-danger"><span>OUI</span></a></div>
                        <div><a href="../SupprimerRessource.php" class="btn btn-primary"><span>NON</span></a></div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</body>
</html>