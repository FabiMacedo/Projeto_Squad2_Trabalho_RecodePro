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

    <?php
        include_once('menu.html');
    ?>

    <div class="jumbotron" style="height: 1000px;">
        <div class="fundocadastro">
            <div class="card mt-5" style="background-color: rgb(255, 111, 22);">
                
                <form action="cadastro_usuario.php" method="post">
                    <h1>Cadastre-se</h1>
                    <input type="text" name="nome" placeholder="Digite o seu nome">
                    <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome">
                    <input type="email" name="email" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" placeholder="Digite sua senha">
                    <input type="password" name="conf_senha" placeholder="Confirme sua senha">
                    <button>Cadastre-se</button>
                    <a href="./login.php">Já possui cadastro? Faça o login</a>
                </form>
                
            </div>
        </div>
    </div>
    <footer>
        <div class="rodape">Squad 02 RecodePro 2020 - Copyright</div>
    </footer>
</body>
</html>
