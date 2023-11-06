<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Visualizar consultas</title>
</head>

<body>
    <style>
        .index3 {
            text-align: center;
            color: #054f77;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .col {
            font-size: 35px;
            color: #054f77;
            margin-bottom: 50px;
            justify-content: center;

        }

        .index2 {
            font-size: 35px;
            color: #054f77;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }

        .borda {
            background: white;
            border: 3px solid #054f77;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 5px;
            text-align: center;
            display: block;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
        }

        a {
            text-decoration: none;
        }

        
    </style>
    <?php
    include("menu.php");
    ?>
   
    <h1 class="index3">Visualizar consultas</h1>



    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="borda">
                 <a class="index2" href="consultas_cardiologista.php">Cardiologista</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_clinicogeral.php"> Clínico Geral</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_dentista.php">Dentista</a>
                </div>
            </div>
           

        </div>
    </div>


    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="borda">
                 <a class="index2" href="consultas_ginecologista.php">Ginecologista</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_nefrologista.php"> Nefrologista</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_neurologista.php">Neurologista</a>
                </div>
            </div>
           

        </div>
    </div>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="borda">
                 <a class="index2" href="consultas_oftalmologista.php">Oftalmologista</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_otorrinolaringologista.php"> Otorrinolaringologista</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
               <a class="index2" href="consultas_pneumologista.php">Pneumologista</a>
                </div>
            </div>
           

        </div>
    </div>
  
    <?php
    include("rodape2.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>