<?php

    include_once './backend/conexao.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
    $escolha = $_POST['cursoescolhido'];


    if (strlen($nome) > 2 && strlen($sobrenome) > 2 && strlen($email) > 3 && strlen($senha) > 3 && $senha === $conf_senha) {
        $senha_cripto = md5($senha);
        $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, cursoescolhido) values('$nome', '$sobrenome', '$email', '$senha_cripto', '$escolha')";
        $conn->query($sql);
        echo "<script>
                alert('Seu cadastro foi efetuado com sucesso!')
                window.location.href = 'login.php'
                </script>
                ";
    }
    else if(strlen($nome) <= 2) {
        echo "<script>
                alert('Digite um nome válido!')
                window.location.href = 'cadastro.php'
                </script>
                ";
    }

    else if(strlen($sobrenome) <= 2) {
        echo "<script>
                alert('Digite um sobrenome válido!')
                window.location.href = 'cadastro.php'
                </script>
                ";
    }

    else if ($senha != $conf_senha) {
        echo "<script>
                alert('As senhas devem ser iguais, tente novamente!')
                window.location.href ='cadastrophp'
                </script>
                ";
    }
    else if(strlen($email) <= 3) {
        echo "<script>
                alert('Digite um email válido para efetuar o cadastro!')
                window.location.href = 'cadastro.php'
                </script>
                ";
    }
    else if(strlen($senha) <= 3) {
        echo "<script>
                alert('Digite uma senha válida para realizar o cadastro!')
                window.location.href = 'cadastro.php'
                </script>
                ";
    }