<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/logo2.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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

  <div class="container">
    <h1>Notícias</h1>
  </div>

  <div class="container">
    <div class="card-group">
      <div class="card">
        <img src="img/turvo4.jpg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">SECRETARIA DA SAÚDE</p>
          <a class="título_card" href="https://www.saude.pr.gov.br/Noticia/Com-apoio-de-Estado-municipio-de-Turvo-promove-acoes-sobre-saude-do-homem" class="card-title">Com apoio de Estado, município de Turvo promove ações sobre a saúde do homem</a>
          <p class="card-text"><small class="text-body-secondary">08/08/2023 - 12:22</small></p>
        </div>
      </div>
      <div class="card">
        <img src="img/londrina.jpg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">SECRETARIA DA SAÚDE</p>
          <a class="título_card" href="https://www.saude.pr.gov.br/Noticia/Estado-libera-R-379-milhoes-para-implementacao-da-maternidade-do-HU-de-Londrina" class="card_title">Estado libera R$ 3,79 milhões para implementação da maternidade do HU de Londrina</a>
          <p class="card-text"><small class="text-body-secondary">03/08/2023 - 14:28</small></p>
        </div>
      </div>
      <div class="card">
        <img src="img/orgaos4.jpg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">SECRETARIA DA SAÚDE</p>
          <a class="título_card" href="https://www.saude.pr.gov.br/Noticia/Saude-capacita-profissionais-sobre-doacao-de-orgaos-e-tecidos-para-transplante" class="card_title">Saúde capacita profissionais sobre doação de órgãos e tecidos para transplante</a>
          <p class="card-text"><small class="text-body-secondary">03/08/2023 - 11:47</small></p>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <h1>Assista!</h1>
  </div>

  <div class="container">
    <div class="video">
      <iframe src="https://www.youtube.com/embed/GXwl3NqVnMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <iframe src="https://www.youtube.com/embed/EYHpSWm1A1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <iframe src="https://www.youtube.com/embed/uAB627iLydA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="youtube">
      <a href="https://youtube.com/@MinSaudeBR">Conheça o canal Ministério da Saúde no YouTube, clique aqui!</a>
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
      <div class="card-footer text-body-secondary">


      </div>
    </div>
  </div>


      
  <div class="container">
    <h1 id="acesse">Acesse:</h1>
  </div>

  <div class="container">
    <div class="info">
      <a href="info_doenças.php">Info doenças</a>
      <br>
      <a href="farmacia.php">Farmácia</a>
      <br>
      <a href="postao.php">Unidades Próximas</a>
      <br>
      <a href="med.php">Médicos</a>
      <br>
    </div>
  </div>
  

  <?php
  include("rodape.php")
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>