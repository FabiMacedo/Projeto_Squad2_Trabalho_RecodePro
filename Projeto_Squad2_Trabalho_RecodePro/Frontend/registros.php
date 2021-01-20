<?php

    include_once '../Backend/conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO registros (nome, email, telefone, mensagem) values ('$nome', '$email', '$telefone', '$mensagem')";
    mysqli_query($conn, $sql);

    if (strlen($nome) > 3 && strlen($mensagem) > 3) {
        $resultado_consulta = $conn->query("SELECT * from registros where nome = '$nome' AND email = '$email' AND telefone = '$telefone' AND mensagem = '$mensagem'");
        $resgistros = mysqli_fetch_all($resultado_consulta);
    
        $_SESSION['nome'] = $registros[0][1];
        $_SESSION['email'] = $registros[0][2];
        $_SESSION['telefone'] = $registros[0][3];
        $_SESSION['mensagem'] = $registros[0][4];

        header('Location: faleconosco.php');
    }
    else {
        echo "<script>alert('Nome ou Mensagem inválidos!')location.href = 'login.php'</script>";
    }
