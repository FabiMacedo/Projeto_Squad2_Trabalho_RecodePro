<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code - Home</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/index.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>

    <?php
        include_once('menu.html');
    ?>

    <div class="jumbotron">
        <div class="Painel-inicial">
            <div class="inicial text-white mb-5 pt-5 px-3" >
                <img class="img-responsive" src="./imagens/logoft2.png">
                <h1 class="h4-responsive mb-4">Curso de programação para surdos</h1>
                <p class="">A Sinal Code desenvolveu uma plataforma digital de cursos na área de programação<br>elaborados para atender exclusivamente a comunidade surda. Todas as aulas são<br>adaptadas com a linguagem de sinais (libras) e legenda, para um melhor<br>desenvolvimento no ensino-aprendizagem.</p>
                <p class="">O curso ofertado é 100% gratuito. Contamos com o patrocínio de empresas <br>parceiras nesta empreitada de cunho social.</p>
            </div>
        </div>
            
        <div class="container">
            <h1 class="h1-responsive mb-4">Porque estudar programação?</h1>
            <div class="container-inter">
                <div class="mercado">
                    <img src="./imagens/mercado.png">
                    <p>Alta demanda por profissionais<br />no mercado de trabalho</p>
                </div>
                <div class="salario">
                    <img src="./imagens/salario.png">
                    <p>Média salarial de R$ 5.000,00</p>
                </div>
                <div class="adapta">
                    <img src="./imagens/adaptacao.png">
                    <p>Fácil adaptação do surdo nos<br />processos de trabalho</p>
                </div>
            </div>
        </div> 
    </div>

    <?php
        include_once('footer.html');
    ?>
</body>
</html>