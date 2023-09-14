<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/darkMode.css" rel="stylesheet">

  <title>Calendario</title>
</head>
  <!-- dark mode -->
  
  <div class="toggle">
    <input id="switch" type="checkbox" name="theme">
    <label for="switch">Toggle</label>
  </div>

<!-- -------- -->

<body>
  <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>

        <div>
          <button id="backButton">Voltar</button>
          <button id="nextButton">Próximo</button>
          <button><a  id="voltarparapagina" href="../consulta.php">Voltar para página anterior</a></button>
        </div>
          
      </div>

      <div id="weekdays">
        <div>Domingo</div>
        <div>Segunda-feira</div>
        <div>Terça-feira</div>
        <div>Quarta-feira</div>
        <div>Quinta-feira</div>
        <div>Sexta-feira</div>
        <div>Sábado</div>
      </div>


      <!-- div dinamic -->
      <div id="calendar" ></div>

   
  </div>

  <div id="newEventModal">
    <div id="dados">
    <h2>Insira seus dados, para marcar a consulta:</h2>
    </div>

    <input id="eventTitleInput" placeholder="Nome completo:"/>
    <input id="eventTitleInput" placeholder="Data de nascimento"/>
    <input id="eventTitleInput" placeholder="CPF"/>
    <input id="eventTitleInput" placeholder="Endereço:"/>
    <input id="eventTitleInput" placeholder="N° do cartão do SUS"/>

    <button id="saveButton"> Salvar</button>
    <button id="cancelButton">Cancelar</button>
  </div>

  <div id="deleteEventModal">

    <div id="consulta">
    <h2>Deseja cancelar sua consulta?</h2>
    </div>

    <div id="eventText"></div><br>


    <button id="deleteButton">Sim</button>
    <button id="closeButton">Não</button>
  </div>

  <div id="modalBackDrop"></div>

 


  <script src="scripts/darkMode.js"></script>
  <script src="./scripts/main.js"></script>
  
</body>
</html>