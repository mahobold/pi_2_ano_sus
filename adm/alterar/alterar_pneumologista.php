<?php
include("../conexao.php");


// Se os dados do médico forem enviados via POST
if (isset($_POST['id_pessoapneu'])) {
    // Recupere os dados do POST
    $id_pessoapneu = $_POST['id_pessoapneu'];
    $data = $_POST['data'];
    $hora= $_POST['hora'];


    // Usando prepared statements para atualizar os dados
    $stmt = $mysqli->prepare("UPDATE pneu SET data = ?, hora = ? WHERE id_pessoapneu = ?");
    $stmt->bind_param('sss', $data, $hora, $id_pessoapneu);
    
    if ($stmt->execute()) {
        $mensagem_sucesso =  "Dados atualizados com sucesso!";
        

    } else {
        echo "Erro ao atualizar: " . $stmt->error;
    }
   

    
    $stmt->close();
    
}


// Se o ID do médico for enviado via GET
if (isset($_GET["id_pessoapneu"])) {
    $id_pessoapneu = $_GET["id_pessoapneu"];

    // Usando prepared statements para consultar os dados
    $stmt = $mysqli->prepare("SELECT * FROM pneu WHERE id_pessoapneu = ?");
    $stmt->bind_param('s', $id_pessoapneu);
    $stmt->execute();

    $result = $stmt->get_result();
    $consultar = $result->fetch_assoc();

    $stmt->close();

    
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo2.png">
    <title>Alterar - Consulta Pneumologista</title>
    <link rel="stylesheet" href="../../css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



</head>

<body>



    <?php
    include("../menu_adm.php");
    ?>
    <div class="container">
        <form action="" method="post">
            <div class="alterar">
            <h1 class="text-center">Alterar - Consulta</h1>
            <label class="form-label" for="">Data</label>
            </div>
            <input type="hidden" name="id_pessoapneu" value="<?php if (isset($consultar['id_pessoapneu'])){echo $consultar['id_pessoapneu'];}?>">
            <input class="form-control" type="text" name="data" value="<?php
                                                                                if (isset($consultar['data'])) {
                                                                                    echo $consultar['data'];
                                                                                } else {
                                                                                    echo "Sem valor";
                                                                                }

                                                                                ?>">
            <div class="alterar">
            <label class="form-label" for="">Hora</label>
            </div>
            <input class="form-control" type="text" name="hora" value="<?php
                                                                        if (isset($consultar['hora'])) {
                                                                            echo $consultar['hora'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">

<button type="button" class="btn btn-outline-success" type="submit" value="Alterar">Alterar</button>
<button type="button" class="btn btn-outline-primary" href="../consultas/consultas_pneumologista.php">Voltar</button>
           
        </form>
    </div>
    <?php
    include("../rodape_adm.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($mensagem_sucesso)): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: '<?php echo $mensagem_sucesso; ?>',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../consultas/consultas_pneumologista.php";  // Redirecione para a página desejada após o usuário clicar em "Ok"
        }
    })
</script>
<?php endif; ?>

</html>