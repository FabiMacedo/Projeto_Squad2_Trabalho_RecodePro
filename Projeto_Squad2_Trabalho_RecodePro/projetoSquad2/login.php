<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Entre ou Cadastre-se</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>


    <main>
        <section class="painel-login">
            <div class="card">
                <form action="login_usuario.php" method="post">
                    <h1>Entre ou Cadastre-se</h1>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <button>Enviar</button>
                    <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui!</a>
                </form>
            </div>
        </section>
        <section class="painel-imagem">
            <img src="./imagens/logosinalcode.jpeg" alt="Logo Sinal Code">
        </section>

    </main>
</body>
</html>