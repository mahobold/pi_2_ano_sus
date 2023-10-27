<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/dieimes.css">
  <link rel="icon" href="img/logo2.png">
  <title>Páginia Inicial</title>
</head>

<body>
  <?php
    include("menu.php");
  ?>
  <?php
    include("carrossel.php");
  ?>
  <?php
    include("noticia.php");
  ?>






        <div class="container text-center">
          <h1 id="acesse">Assista!</h1>
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


 
  <?php
  include("static/rodape.php");
  ?>
      
</body>
</html>