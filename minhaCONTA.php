<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="projeto.css">
        <title>MINHA CONTA</title>
    </head>
    <body>
        <?php
           // include("menu.php");
        ?>
        <div class="container">
            <div class="azulmarinho"> 
                <h1>Cadastro</h1>
            </div>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <form action="cadastro.php" method="get">
                        <label>Nome completo: </label>
                        <input type="text" name="nome"/><br/><br/>
                        <label>CPF: </label>
                        <input type="text" name="data"/><br/><br/>
                        <label>RG: </label>
                        <input type="text" name="CC"/><br/><br/>
                        <label>Numero de telefone: </label>
                        <input type="text" name="CC"/><br/><br/>
                        <label>E-Mail: </label>
                        <input type="text" name="civil"/><br/><br/>
                        <label>nº: </label>
                        <input type="text" name="pais"/><br/><br/>
                        <label> </label>
                        <input type="text" name="cidade"/><br/><br/>
                        <label> </label>
                        <input type="text" name="email"/><br/><br/>
                        <label>Crie uma senha: </label>
                        <input type="text" name="senha"/><br/><br/>
                        </div>
                        <input type="submit" class="btn btn-success" value="Entrar">
                        <input type="reset" class="btn btn-danger" value="Limpar">
                        </div>
                    </form>
                </div>
                <div class="col-4">

                
                
            </div>    
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>