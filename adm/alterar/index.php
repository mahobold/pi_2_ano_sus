<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/dieimes.css">
    <title>Alterar-index</title>
</head>

<body>
    
    <?php
    include("menu.php");
    ?>
   
    <h1 class="index3">Alterar</h1>



    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="borda">
                <i class="bi bi-person-vcard"></i> <a class="index2" href="alterar_medico.php">Médicos</a>
                </div>
            </div>
            <div class="col">
                <div class="borda">
                <i class="bi bi-journal-text"></i><a class="index2" href="alterarespecialidade.php"> Especialidades</a>
                </div>
            </div>
           

        </div>
    </div>
  
    <?php
    include("rodape.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>