<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=1"/>
    <title>Document</title>
    
    <link href="fichierBootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fichierBootstrap/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="fichierBootstrap/myCSS/monStyle.css">
    <link href="fichierBootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  
</head>
<body>
  
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
        </div>
    </div>
</nav>

<div id="content">
  <section class="banner pt-5 d-flex justify-content-center align-items-center">
    <div class="container my-5 ">
      <div class="row">
        <div class="col-lg-6 ">
          <h1 class="text-capitalize banner-desc">faculte des Sciences et Techniques<br>Departement Mathematiques-Informatique</br>Section Informatique</h1>
        </div>
        <div class="col-lg-6 ">
          
        </div>
        </div>
      </div>
  </section>

  <section class="section2 ">
    <div class="container d-flex">
      <div class="row">
        <div class="card mb-3 border-0">
          <div class="row">
            <div class="col-md-6">
              <img src="imageAdmin/s6.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
              <h5>repenser les modeles de formation a l`ere du digital!!</h5>
                <p class="card-text">la connaissance s`aquiert par l`experience,tout le reste n`est que de l`information.</p>
                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0">
          <div class="row">
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
              </div>
            </div>
            <div class="col-md-6">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imageAdmin/slide1.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imageAdmin/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imageAdmin/slide3.jpg" class="d-block w-100 img-fluid " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0">
          <div class="row">
          <div class="col-md-6">
              <img src="imageAdmin/s4.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>

</body>
</html>