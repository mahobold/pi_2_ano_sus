<?php
include("../conexao.php");
/* require("autenticacao.php"); Falta fazer */

if (isset($_GET["id_medico"])) {
} else {
    
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <title>Alterar - Médico</title>
    <link rel="stylesheet" href="css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php
    include("../../static/menu.php");
    ?>
    <div class="container">
        <form action="" method="post">
            <h1 class="text-center">Alterar - Médico</h1>
            <label class="form-label" for="">Nome</label>
            <input type="hidden" name="id_medico" value="
                <?php
                if (isset($consultar['id_medico'])) {
                    echo $consultar['id_medico'];
                }

                ?>">
            <input class="form-control" type="text" name="nomemedico" value="<?php
                                                                                if (isset($consultar['nomemedico'])) {
                                                                                    echo $consultar['nomemedico'];
                                                                                } else {
                                                                                    echo "Sem valor";
                                                                                }

                                                                                ?>">

            <label class="form-label" for="">Idade</label>
            <input class="form-control" type="text" name="idade" value="<?php
                                                                        if (isset($consultar['idade'])) {
                                                                            echo $consultar['idade'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">

            <label class="form-label" for="">CRM</label>
            <input class="form-control" type="text" name="crm" value="<?php
                                                                        if (isset($consultar['crm'])) {
                                                                            echo $consultar['crm'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">

            <label class="form-label" for="">Endereço</label>
            <input class="form-control" type="text" name="endereco" value="<?php
                                                                            if (isset($consultar['endereco'])) {
                                                                                echo $consultar['endereco'];
                                                                            } else {
                                                                                echo "Sem valor";
                                                                            }

                                                                            ?>">

            <label class="form-label" for="">Telefone</label>
            <input class="form-control" type="text" name="telefone" value="<?php
                                                                            if (isset($consultar['telefone'])) {
                                                                                echo $consultar['telefone'];
                                                                            } else {
                                                                                echo "Sem valor";
                                                                            }

                                                                            ?>">

            <label class="form-label" for="">Especialidade</label>
            <input class="form-control" type="text" name="especialidade" value="<?php
                                                                                if (isset($consultar['especialidade'])) {
                                                                                    echo $consultar['especialidade'];
                                                                                } else {
                                                                                    echo "Sem valor";
                                                                                }

                                                                                ?>">
            <input class="btn btn-success" type="submit" value="Alterar">
            <a class="btn btn-primary" href="../index.php">Voltar</a>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>