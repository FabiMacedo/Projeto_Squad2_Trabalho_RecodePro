<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code - Fale Conosco</title>
    
    <link rel="stylesheet" href="./Estilos/global.css">
    <link rel="stylesheet" href="./Estilos/faleconosco.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body class="container">
    <?php

        include_once '../Backend/conexao.php';

        $id_user = intval($_GET['usuario']);

        $result = $conn->query("SELECT * FROM registros WHERE id = '$id_user'");
        $comentarios = $result->fetch_assoc();

        $name = $comentarios['nome'];
        $email = $comentarios['email'];
        $telefone = $comentarios['telefone'];
        $comentario= $comentarios['mensagem'];

    ?>

    <?php
        include_once('menu.html');
    ?>
    
    <div class="fundocontato">
        <div class="quadrado">
            <form action="atualizaregistro.php?usuario=<?php echo $id_user; ?>" method="post">
                <h1>Edite seu comentário</h1>
                <input type="text" name='nome' value="<?php echo $name; ?>" required/>
                <input type="email" name='email' value="<?php echo $email?>" required/>
                <input type="text" name='telefone' value="<?php echo $telefone?>" required/>
                <textarea name="mensagem" placeholder="<?php echo $comentario?>" required></textarea>
                <button type="#">Salvar</button>
            </form>
        </div>
    </div>

 

</body>
</html>