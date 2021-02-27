<?php

    include_once '../Backend/conexao.php';

//Libera uma variavel global session.
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (strlen($email) > 3 && strlen($senha) > 3) {

        $resultado_consulta = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_pass ='$senha' LIMIT 1";
        $resultado_consulta = mysqli_query($conn, $resultado_consulta);
        $resultado_cadastro = mysqli_fetch_assoc($resultado_consulta);
        if(isset($resultado_cadastro)) {

            header('Location: ./paineladm.php');

        } else{
            echo "<script>
                    alert('Este email não pertence a um Administrador !!')
                    window.location.href = 'login_admin.php'
                    </script>";
        }
    
    } else {
    echo "<script>
        alert('E-mail ou senha inválidos!')
        location.href = 'login_admin.php'
        </script>";
    }