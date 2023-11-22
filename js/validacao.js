$('#cadastro').on('submit', function (e) {
    e.preventDefault(); // Impede o envio padrão do formulário

    // Coleta os dados do formulário
    var formData = $(this).serialize();

    // Faça uma solicitação AJAX para enviar os dados ao servidor
    $.ajax({
        type: 'POST',
        url: '../user/processar_cadastro.php', // Garanta que este é o arquivo correto
        data: formData,
        success: function (response) {
            console.log("Resposta do servidor:", response); // Para depuração

            response = response.trim();
            if (response === 'success') {
                Swal.fire({
                    title: 'Sucesso',
                    text: 'Cadastro criado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'login.php';
                    }
                });
            } else if (response === 'email_exists') {
                Swal.fire({
                    title: 'Erro',
                    text: 'Este e-mail já está cadastrado!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else if (response === 'cpf_exists') {
                Swal.fire({
                    title: 'Erro',
                    text: 'Este cpf já está cadastrado!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else {
                Swal.fire({
                    title: 'Erro',
                    text: 'Erro no cadastro!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function () {
            Swal.fire({
                title: 'Erro',
                text: 'Erro na comunicação com o servidor.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
});