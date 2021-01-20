<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code - Cadastro</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/cadastro.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="container">
    <?php
        include_once('menu.html');
    ?>

    <div class="fundocadastro">
        <div class="quadrado">
            <form action="cadastro_usuario.php" method="post">
                <h1>Cadastre-se</h1>
                <input type="text" name="nome" placeholder="Digite o seu nome">
                <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome">
                <input type="email" name="email" placeholder="Digite seu e-mail">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <input type="password" name="conf_senha" placeholder="Confirme sua senha">
                <p class="escolha">Gostaria de atuar em qual área?</p>
                <div class="escolha-1">
                    <input type="radio" name="cursoescolhido" id="Front-end" value="Front-end">
                    <span>Front-end</span>
                    <input type="radio" name="cursoescolhido" id="Back-end" value="Back-end">
                    <span>Back-end</span>
                </div>
                <button>Cadastre-se</button>
                <a href="./login.php">Já possui cadastro? Faça o login</a>
            </form>
        </div>
    </div>

    <?php
        include_once('footer.html');
    ?>  
</body>
</html>
