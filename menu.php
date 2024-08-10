<html>

<head>
    <meta name="viewport" content="widt=device-width,initil-scale=1" />
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap-grid.min.css " />
    <link rel="stylesheet" href="myCSS/style.css">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css">
</head>
<nav class="navbar fixed-top navbar-expand-lg text-light justify-content-center" style="background-color:green">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link text-light"  aria-current="page" href="Accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="LoginEnseignant.php">Espace Enseignant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="etudiant.php">Espace Etudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="LoginAdmin.php">Espace Admin</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
</html>