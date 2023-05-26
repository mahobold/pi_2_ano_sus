<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projeto.css">

    <title>posto</title>
</head>
<body>


<!--propaganda-->  <!--vou atrás ainda-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://arquivo.unifesp.br/images/icon/icn-calendario-csp02.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://www.ingabyte.com.br/sistema/arquivos/12074/080720145409_ubs_jacutinga2_jpg.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>




  <!--centralizar as letras ai-->
    <div class="postos">
  <h1>Postos de saúde</h1>
  </div>
  <div class="postos2">
     <p>Logo a baixo teremos varios postos na localidade de ivaiporã.<p>
     </div>
<!--centralizar as letras ai-->
 <h2>POSTO DE SAUDE DE JACUTINGA</h2>
 <img src="https://cdn.tnonline.com.br/img/Artigo-Destaque/550000/Inauguracao-faz-parte-das-comemoracoes-do-60-anive-00559432-0-202111190625.jpg?xid=493491" alt="">

<!--centralizar as letras ai, no caso a ana vai fazer isso.-->
<h3> HORARIOS DE ATENDIMENTO</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dias</th>
      <th scope="col">Horário/Manhã</th>
      <th scope="col">Horário/Tarde</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Segunda-feira</td>    <!--colocar a tabela menor-->
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>terça-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>quarta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>quinta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sexta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
  </tbody>
</table>

<h2>POSTO DE SAUDE DE JACUTINGA</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dias</th>
      <th scope="col">Horário/Manhã</th>
      <th scope="col">Horário/Tarde</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Segunda-feira</td>    <!--colocar a tabela menor-->
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>terça-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>quarta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>quinta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sexta-feira</td>
      <td>07:30 às 11:30</td>
      <td>13:00 às 17:00</td>
    </tr>
  </tbody>
</table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>