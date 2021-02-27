<?php

    include_once '../Backend/conexao.php';

//Libera uma variavel global session.
    session_start();

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    if (strlen($email) > 3 && strlen($senha) > 3) {

        $resultado_consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha' LIMIT 1";
        $resultado_consulta = mysqli_query($conn, $resultado_consulta);
        $resultado_cadastro = mysqli_fetch_assoc($resultado_consulta);
        if(isset($resultado_cadastro)) {
            
            $_SESSION['nome'] = $resultado_cadastro['nome'];
            $_SESSION['email'] = $resultado_cadastro['email'];
            $_SESSION['senha'] = $resultado_cadastro['senha'];

            header('Location: ./front.php');

        } else{
            echo "<script>
                    alert('Este email não é um usuário cadastrado !!!')
                    window.location.href = 'login.php'
                    </script>";
        }
    
    } else {
    echo "<script>
        alert('E-mail ou senha inválidos!')
        location.href = 'login.php'
        </script>";
    }