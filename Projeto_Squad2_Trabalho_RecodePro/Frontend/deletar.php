<?php

    include_once '../Backend/conexao.php';

    $usu_id = intval($_GET['usuario']);

    $result = $conn->query("DELETE FROM registros WHERE id = '$usu_id'");

    if ($result == true) {

        echo "
            <script>
                alert('Comentario excluído com sucesso!')
                window.location.href = 'paineladm.php'
            </script>
            ";
    } else {
        echo "
                <script>
                    alert('Não foi possível Deletar o comentario!')
                    window.location.href = 'paineladm.php'
                </script>
            ";
    }
    
