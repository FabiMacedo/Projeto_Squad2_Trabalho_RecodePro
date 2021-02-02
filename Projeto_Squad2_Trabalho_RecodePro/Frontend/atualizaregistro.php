<?php

    include_once '../Backend/conexao.php';

    $id_user = intval($_GET['usuario']);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "UPDATE registros SET
    nome = '$nome', 
    email = '$email',
    telefone = '$telefone', 
    mensagem = '$mensagem'
    WHERE id = '$id_user'";

    mysqli_query($conn, $sql);

    if ($sql == true) {

        echo "
            <script>
                alert('Suas alterações foram executadas!')
                window.location.href = 'paineladm.php'
            </script>
            ";
    } else {
        echo "
                <script>
                    alert('Não foi possível executar as alterações!')
                    window.location.href = 'paineladm.php'
                </script>
            ";
    }
