<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/projeto.css">
        <title>Marque sua consulta</title>
    </head>
    <body>
        <?php
        include("menu.php")
        ?>
        <h1 class="consultatitulo" >Com qual médico você gostaria de consultar?</h1>
        <div class="consulta">
            <div class="row">
                <div class="col">
                    <img class="iconeconsulta" src="icone/estetoscopio.png">
                    <a class="btconsulta" href="clinico_geral.php">Clínico Geral</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/cardiologia.png">
                    <a class="btconsulta" href="cardiologista.php">Cardiologista</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/dente.png">
                    <a class="btconsulta" href="dentista.php">Dentista</a>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <img class="iconeconsulta" src="icone/utero.png">
                    <a class="btconsulta" href="ginecologista.php">Ginecologista</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/nefrologista.png">
                    <a class="btconsulta" href="nefrologista.php">Nefrologista</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/cerebro.png">
                    <a class="btconsulta" href="neurologista.php">Neurologista</a>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <img class="iconeconsulta" src="icone/olho.png">
                    <a class="btconsulta" href="oftalmologista.php">Oftalmologista</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/otorrinolaringologia.png">
                    <a class="btconsulta" href="otorrinolaringologista.php">Otorrinolaringologista</a>
                </div>

                <div class="col">
                    <img class="iconeconsulta" src="icone/pulmoes.png">
                    <a class="btconsulta" href="pneumologista.php">Pneumologista</a>
                </div>
            </div>
        </div> 
        <p><a class="btvltconsulta" href="index.php">Voltar</a></p>


<?php
  include("rodape2.php");
  ?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>