<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="img/logo2.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/projeto.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postos</title>
</head>

<body>

<?php
  include("menu.php");
  ?>
  
    <h1 id="postos">Postos de Saúde</h1>

  <div class="container">
    <h2 class="saude">POSTO DE SAÚDE DE JACUTINGA</h2>
    <img class="img-fluid" src="https://cdn.tnonline.com.br/img/Artigo-Destaque/550000/Inauguracao-faz-parte-das-comemoracoes-do-60-anive-00559432-0-202111190625.jpg?xid=493491" class="img-fluid" alt="">
    
    <h3 class="hr"> Horarios de Atendimento</h3>
    <table id="atendimentos" class="table">
      <thead>
        <tr>
          <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg></th>
          <th scope="col">Dias</th>
          <th scope="col">Horário/Manhã</th>
          <th scope="col">Horário/Tarde</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <th scope="row">1</th>
          <td>Segunda-Feira</td>
          <td>07:30 às 11:30</td>
          <td>13:00 às 17:00</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Terça-feira</td>
          <td>07:30 às 11:30</td>
          <td>13:00 às 17:00</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Quarta-feira</td>
          <td>07:30 às 11:30</td>
          <td>13:00 às 17:00</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Quinta-feira</td>
          <td>07:30 às 11:30</td>
          <td>13:00 às 17:00</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Sexta-feira</td>
          <td>07:30 às 11:30</td>
          <td>13:00 às 17:00</td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="img\Alex_Gonçalvesluiz.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="titulo">Medico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Alex Gonçalves.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Aurora.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-2178
          </p>
          <a href="pdflef/curriculo1" class="btn btn-primary">Ver formação</a>
        </div>
      </div> <!-- FIM Card Medico plantão do dia -->
      
      <!-- ################################ Card Pediatra plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://blog.ipog.edu.br/wp-content/uploads/2017/10/m%C3%A9dico.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pediatra plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dra. Isadora bertotti.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua corinthians.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-1720
          </p>
          <a href="pdflef/curriculo2" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjS7tUIkxv7AN4zVpCYl2hFTejq87RIXaVREPJuFy-vWwkDescQCOFGyx7i21EvW13Lm4&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ortopedista plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Victor Araújo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Grêmio.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-8761
          </p>
          <a href="pdflef/curriculo3" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
        <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto Jacutinga ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://cedro.ce.gov.br/fotos/319/Img0_600x400.jpg " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto de Jacutinga.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-7113
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Fluminense.
          </p>
          <a href="https://goo.gl/maps/ctjNLhTUHtY3PDTK7" class="btn btn-primary">Endereço aqui.</a>
        </div>
      </div>
      <!-- ################################ FIM Card Posto Jacutinga ##################################################  -->

    </div>  <!-- FIM do ROW -->

    <!-- adsnflndf -->
    <div class="container">

      <h2 class="saude">POSTO DE SAÚDE UBS MONTE CASTELO</h2>
      <img class="img" src="https://cdn.tnonline.com.br/img/Artigo-Destaque/510000/Artigo-Destaque_00511386_00.jpg?xid=327763" class="img-fluid" alt="">
      
      <h3 class="hr"> Horários de Atendimento</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              </svg></th>
            <th scope="col">Dias</th>
            <th scope="col">Horário/Manhã</th>
            <th scope="col">Horário/Tarde</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Segunda-feira</td> <!--colocar a tabela menor-->
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Terça-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Quarta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Quinta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Sexta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
        </tbody>
      </table>
      </div>
      <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXW7l1Zbh5hieH7jHF1m3jJ5H8fiO1Rpv3Knq1LfCgLbGBxCLwEEeDIhIpBitq39MeFWA&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Médico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Carlos Vicente.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Flamengo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-9864
          </p>
          <a href="" class="btn btn-primary">Ver formação</a>
        </div>
      </div> <!-- FIM Card Medico plantão do dia -->
      
      <!-- ################################ Card Pediatra plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://clinicaimed.com.br/wp-content/uploads/2021/07/Qual-medico-e-indicado-para-o-tratamento-da-covid-imed.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pediatra plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dra. Thayane jukasky.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Palmeiras.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-7656
          </p>
          <a href="" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="img/esveraldo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ortopedista plantão do dia.</h5>
           <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Esveraldo Camargo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Santos.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-6789
          </p>
          <a href="" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
        <!-- ################################ FIM Card Ortopedista plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto M. Castelo ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnVGilm5qA6Io1h05YDmIoKO5mpRjGOLdw6xOh-odpHdUPz46MtX9JaG1w19072tqzXWs&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto Posto M. Castelo</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg> (43) 3472-0921
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua São Mateus, S/Nº - Vila Monte Castelo.
          </p>
          <a href="https://goo.gl/maps/ctjNLhTUHtY3PDTK7" class="btn btn-primary">Endereço aqui.</a>
        </div>
      </div>
      <!-- ################################ FIM Card Posto M. Castelo ##################################################  -->

    </div>  <!-- FIM do ROW -->
    </div>


    <div class="container">
      <h2 class="saude">CENTRO DE SAÚDE</h2>
      <img id="img" src="https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=IPORQbiQjWg4Z9UdBo7dxg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=134.83238&pitch=0&thumbfov=100" class="img-fluid" alt="">
      
      <h3 class="hr"> Horários de Atendimento</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              </svg></th>
            <th scope="col">Dias</th>
            <th scope="col">Horário/Manhã</th>
            <th scope="col">Horário/Tarde</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Segunda-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Terça-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Quarta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Quinta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Sexta-feira</td>
            <td>07:30 às 11:30</td>
            <td>13:00 às 17:00</td>
          </tr>
      </table>

      <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="img\luiz_passosluiz.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Médico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Luis Passos.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua America-mg.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-1418
          </p>
          <a href="" class="btn btn-primary">Ver formação</a>
        </div>
      </div> <!-- FIM Card Medico plantão do dia -->
      
      <!-- ################################ Card Pediatra plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="img/medico6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pediatra plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Joaquim Sppadrizani.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Coritiba.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-8717
          </p>
          <a href="" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="img/Maria_Araújo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ortopedista plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dra. Maria Araújo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Botafogo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-9085
          </p>
          <a href="pdf/Maria_Araújo.pdf" class="btn btn-primary">Ver formação</a>
        </div>

      </div>
        <!-- ################################ FIM Card Ortopista plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto Jacutinga ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://www.gov.br/pt-br/noticias/saude-e-vigilancia-sanitaria/2020/03/postos-de-saude-podem-atender-90-dos-casos-de-coronavirus/secretaria-caroline-martins-foto-ascom-ms.jpeg/@@images/4506e132-fd29-40cd-a770-954c41255d7c.jpeg  " alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto Centro de saúde.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 3472-1788
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>Rua São Paulo.
          </p>
          <a href="https://goo.gl/maps/HzV7zsftdxPyaEX28" class="btn btn-primary">Endereço Aqui.</a>
        </div>
      </div>
      <!-- ################################ FIM Card Posto Jacutinga ##################################################  -->

    </div>  <!-- FIM do ROW -->
    </div>

    <div class="bloco2">
      </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>