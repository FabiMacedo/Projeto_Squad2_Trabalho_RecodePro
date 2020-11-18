<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code - Fale Conosco</title>
    
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/faleconosco.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>

    <?php
        include_once('menu.html');
    ?>

    <main class="jumbotron">
        <div class="fundocontato">
            <div class="quadrado">
                <form action="registros.php" method="post">
                    <h1>Fale Conosco!</h1>
                    <input type="text" name= "nome" placeholder="Digite o seu nome" required/>
                    <input type="email" name="email" placeholder="Digite o seu e-mail" required/>
                    <input type="text" name="telefone" placeholder="Digite o seu telefone" required/>
                    <textarea name="mensagem" placeholder="Digite aqui a sua mensagem" required></textarea>
                    <button type="submit">Enviar!</button>
                </form>
            </div>
        </div>
        <footer class="rodapee">
                <h5>Sinal Code</h5>
                <h6>email: recode2020spt2squad2@gmail.com</h6>
        </footer>
    </main>
</body>
</html>