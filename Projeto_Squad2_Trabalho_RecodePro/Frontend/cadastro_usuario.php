<?php

    include_once '../Backend/conexao.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
    $escolha = $_POST['id_curso'];


    if (strlen($nome) > 2 && strlen($sobrenome) > 2 && strlen($email) > 3 && strlen($senha) > 3 && $senha === $conf_senha) {
        $senha_cripto = md5($senha);

        $resultado_consulta = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $resultado_consulta = mysqli_query($conn, $resultado_consulta);
        $resultado_cadastro = mysqli_fetch_assoc($resultado_consulta);
        if (!isset($resultado_cadastro)){
            $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, id_curso) values('$nome', '$sobrenome', '$email', '$senha_cripto', '$escolha')";
            $conn->query($sql);
            echo "<script>
                    alert('Seu cadastro foi efetuado com sucesso!')
                    window.location.href = 'login.php'
                    </script>
                    ";
        }else{
            echo "<script>
                    alert('Este email, já sendo utilizado por outro usuario !!!')
                    window.location.href = 'cadastro.php'
                    </script>";
        }
        
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

