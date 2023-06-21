<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="projeto.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luiz dela</title>
</head>

<body>

  <?php
  include("menu.php");
  ?>

  <div class="postos">
    <h1>Postos de saúde</h1>
  </div>
  <div class="container">
    <h2>POSTO DE SAUDE DE JACUTINGA</h2>
    <img src="https://cdn.tnonline.com.br/img/Artigo-Destaque/550000/Inauguracao-faz-parte-das-comemoracoes-do-60-anive-00559432-0-202111190625.jpg?xid=493491" class="img-fluid" alt="">
    <h3> Horarios de Atendimento</h3>
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

    <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="https://medicinasa.com.br/wp-content/uploads/2021/08/Vinicius-Destefani_Sanar.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Medico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Alex Gonçalves.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua ###.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
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
            </svg> Rua ###.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjS7tUIkxv7AN4zVpCYl2hFTejq87RIXaVREPJuFy-vWwkDescQCOFGyx7i21EvW13Lm4&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ortopedista plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Victor Araújo.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua ###.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(22) 2 2222-2222
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
        <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto Jacutinga ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://png.pngtree.com/png-vector/20191028/ourlarge/pngtree-hospital-icon-cartoon-style-png-image_1896241.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto de Jacutinga.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 3472-7113
          </p>
          <a href="https://goo.gl/maps/ctjNLhTUHtY3PDTK7" class="btn btn-primary">Endereço aqui.</a>
        </div>
      </div>
      <!-- ################################ FIM Card Posto Jacutinga ##################################################  -->

    </div>  <!-- FIM do ROW -->

    <!-- adsnflndf -->
    <div class="container">

      <h2>Posto de saude UBS Monte Castelo</h2>
      <img src="https://cdn.tnonline.com.br/img/Artigo-Destaque/510000/Artigo-Destaque_00511386_00.jpg?xid=327763" class="img-fluid" alt="">
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
      </div>
      <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXW7l1Zbh5hieH7jHF1m3jJ5H8fiO1Rpv3Knq1LfCgLbGBxCLwEEeDIhIpBitq39MeFWA&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Medico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Carlos Vicente.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua ###.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
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
            </svg> Dra. thayane jukasky.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua bla bla.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://i.pinimg.com/originals/27/a6/df/27a6df0e3291c615bdb4763e0188347e.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ortopedista plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Bolsonaro anti petista.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Planalto.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(22) 2 2222-2222
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
        <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto M. Castelo ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/vetores-premium/medico-e-enfermeira-fofos-em-frente-ao-personagem-de-desenho-animado-do-edificio-do-hospital_295036-142.jpg?w=2000" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto de Jacutinga.</h5>
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
      <h2>Centro de saúde</h2>
      <img src="https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=IPORQbiQjWg4Z9UdBo7dxg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=134.83238&pitch=0&thumbfov=100" class="img-fluid" alt="">
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

      <div class="row">
      <!-- ##################################################################################  -->
      <div class="card" style="width: 18rem;"> <!-- Card Medico plantão do dia -->
        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3d080d3ef3c2ddc1/63a2674bc3165b4f6b65a98c/messi1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Medico plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Messi.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua bla bla.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>
      </div> <!-- FIM Card Medico plantão do dia -->
      
      <!-- ################################ Card Pediatra plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt989611293da82501/60e1c6aceecbe32c83877bbc/64a734450076eb42cf8cd97eb52abd89d00f5482.jpeg?auto=webp&format=pjpg&width=3840&quality=60" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pediatra plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Camisa 10 do Barça.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua bla bla.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 9 9999-9999
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
           <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 


          <!-- ################################ Card Ortopedista plantão do dia ##################################################  --> 
      <div class="card" style="width: 18rem;"> 
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ortopedista plantão do dia.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </svg> Dr. Messi pai do real madrid.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> Rua Planalto.
          </p>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(22) 2 2222-2222
          </p>
          <a href="#" class="btn btn-primary">***********</a>
        </div>

      </div>
        <!-- ################################ FIM Card Pediatra plantão do dia ##################################################  --> 
     
      <!-- ################################ Card Posto Jacutinga ##################################################  -->    
      <div class="card" style="width: 18rem;">
        <img src="https://png.pngtree.com/png-clipart/20190117/ourlarge/pngtree-white-hospital-big-green-tree-cartoon-illustration-hand-drawn-medical-illustration-png-image_412745.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Posto Centro de saúde.</h5>
          <p class="card-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>(43) 93472-1788
          </p>
          <a href="https://goo.gl/maps/HzV7zsftdxPyaEX28" class="btn btn-primary">Endereço Aqui.</a>
        </div>
      </div>
      <!-- ################################ FIM Card Posto Jacutinga ##################################################  -->

    </div>  <!-- FIM do ROW -->
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>