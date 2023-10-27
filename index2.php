<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/logo2.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/dieimes.css"> -->
  <link rel="stylesheet" href="css/dieimes.css">
  <!-- <link rel="stylesheet" href="css/projeto.css"> -->
  <title>Página - Principal</title>
</head>

<body>
  <?php
  include("menu.php");
  ?>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/um.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/dois.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/tress.jpg" class="d-block w-100">
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

  <div class="noticia">
    <h1>Notícias</h1>
  </div>

  <div class="container-fluid">
    
      
     
  </div>


  <div class="noticia">
    <h1>Assista!</h1>
  </div>


  <div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/GXwl3NqVnMg?si=ua8pxclK-B0VLcFP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/EYHpSWm1A1Q?si=bbtBslg7-RpkGILR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/uAB627iLydA?si=yjbdJW08SnUP0htk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <a href="https://youtube.com/@MinSaudeBR" class="btn btn-outline-danger btn-lg">Conheça o canal Ministério da Saúde no YouTube</a>
    </div>
</div>


<div class="container">
  <div class="index">
  <h1>Unidades Próximas</h1>
    </div>
  </div>

  <div class="container">
    <div class="card text-center">
      <div class="card-header">
        Google Maps
      </div>
      <div class="card-body">
        <h5 class="card-title">Localize-se</h5>
        <p class="card-text">Descobra qual a localização do posto de saúde mais próximo de você.</p>
        <a href="https://www.google.com/maps/search/posto+de+sa%C3%BAde+mais+pr%C3%B3ximo/@-25.4181597,-49.2575947,13z/data=!3m1!4b1?entry=ttu" class="btn btn-primary">Descubra Já!</a>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <h1 id="acesse">Acesse:</h1>
  </div>


  <div class="container mt-5">
      <ul class="list-group text-center custom-list-group">
          <li class="list-group-item mb-3">
              <i class="fas fa-notes-medical mr-2"></i>
              <a href="info.php">Info doenças</a>
          </li>
          <li class="list-group-item mb-3">
              <i class="fas fa-capsules mr-2"></i>
              <a href="farm.php">Farmácia</a>
          </li>
          <li class="list-group-item mb-3">
              <i class="fas fa-clinic-medical mr-2"></i>
              <a href="postao.php">Unidades Próximas</a>
          </li>
          
      </ul>
  </div>


      <div class="bloco2">
      </div>

 
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>