<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Área Administrativa</title>
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
            margin-bottom: 300px;
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

        hr {
            background-color: #054f77;
        }
    </style>
    <?php
    include("menu.php");
    ?>
    <hr>
    <h1 class="index3">Área Adminstrativa</h1>



    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="borda">
                    <i class="bi bi-person-fill-gear"></i> <a class="index2" href="alterar/"> Alterações</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
                    <i class="bi bi-search"></i> <a class="index2" href="consultar/"> Consultar</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
                    <i class="bi bi-person-x-fill"></i> <a class="index2" href="deletar/"> Deletar</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
                    <i class="bi bi-person-circle"></i> <a class="index2" href="cadastrar/"> Cadastrar</a>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <?php
    include("rodape2.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>