<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


    $conn = mysqli_connect("localhost", "root", "", "sinalcode");
    $sql = "INSERT INTO registros (nome, email, telefone, mensagem) values ('$nome', '$email', '$telefone', '$mensagem')";
    mysqli_query($conn, $sql);

    if ($conn) {
        echo "Conexão bem sucedida!";
    }
    else {
        die("Erro ao realizar conexão " . mysqli_connect_error());
    }

    echo "<script>
        alert('A sua mensagem foi enviada com sucesso!')
        window.location.href= 'index.php'
    </script>";

    
    
    