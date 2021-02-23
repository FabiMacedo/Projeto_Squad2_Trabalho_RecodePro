<?php

    session_start();

    // Se não existir um valor no indice nome, então encerre a aplicação
    if (!isset($_SESSION['nome'])) {
        header('Location: index.php');
        exit;
    }

    // session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code - Cursos</title>
    <link rel="stylesheet" href="./Estilos/global.css">
    <link rel="stylesheet" href="./Estilos/front.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <?php
        include_once('menu.html');
    ?>
    <div class="container1">
        <h1>Olá, <?php echo $_SESSION['nome'] ?> bem vindo(a),</h1>
        <h3>Nesta página você terá acesso a trilha de Front-end, bons estudos!</h3>
        <div class="cursoconteudo">
            <div class="listaaula">
                <div class="intro">
                    <h2>1. Introdução</h2>
                    <div class="intro-1">
                        <a href="front1.php"><img src="./Imagens/cursos/play.png" alt=""></a>
                        <div>
                            <p>Uma breve história da internet</p>
                            <p>0:25</p>
                        </div>   
                    </div>
                    <div class="intro-1">
                        <img src="./Imagens/cursos/play.png" alt="">
                        <div>
                            <p>Material em desenvolvimento...</p>
                            <p>0:00</p>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="videoaula">
                <h1>Recepção aos alunos</h1>
                <video class="card-img-top" controls="controls" autoplay>
                    <source src="./videos/recepcao.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
        <div class="footer">
            <h1>&copy; Desenvolvido por SQUAD 2 SPT2 - Recode Pro 2021</h1>
            <div class="logos">
                <a href="https://www.facebook.com/sinal.code.1" class="facebook"><img src="./Imagens/facebook.png" alt="Facebook - Sinal Code"/></a>
                <a href="https://www.instagram.com/sinalcode2020/?hl=pt-br" class="instagram"><img src="./Imagens/instagram.png" alt="Instagram - Sinal Code"/></a>
                <a href="mailto:codesinal@gmail.com?subject=subject text" class="gmail"><img src="./Imagens/gmail.png" alt="Email - Sinal Code"/></a>
            </div>
        </div>
    </div> 

    
</body>
</html>