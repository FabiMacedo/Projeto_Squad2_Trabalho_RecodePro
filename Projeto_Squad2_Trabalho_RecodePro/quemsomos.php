<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/quemsomos.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body style="background: rgb(0, 194, 203);">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <!-- Navbar --></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><img src="./imagens/logosinal.jpg" width="70px"><span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quemsomos.php">Quem somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cursos.php">HTML5</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cursos.php">CSS</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faleconosco.php">Fale conosco</a>
                </li>
            </ul>

        </div>
    </nav>
    <main>
        <div class="jumbotron">
            <div id=box>
                <br><br>
                <h1 class="h1-responsive mb-4">QUEM SOMOS</h1>
                <br><br><br><br>
                <h4 class="h3-responsive mb-4">Proposta</h4>
                <p class="d-flex mx-2 mb-2 text-center">
                    São muitos os desafios enfrentados pelos surdos quando falamos de
                    emprego em nosso país não é mesmo?
                    Este é o desafio que move a equipe Sinal Code.<br>

                    A nossa motivação é proporcionar ao surdo
                    uma capacitação profissional que lhe
                    garanta reconhecimento profissional
                    e uma vida digna.<br>

                    Compreendendo o processo diferenciado
                    de aprendizagem dos surdos, a equipe
                    (nome), desenvolveu um conteúdo
                    pedagógico para atender especifidades
                    da surdez.<br>

                    Todas as vídeo aulas contam com um
                    tradutor intérprete em Libras, e legenda
                    de seu conteúdo.</p>
            </div>

            <div id=box>
                <h4 class="h3-responsive mb-4">História</h4>
                <p class="d-flex mx-2 mb-2 text-center">
                    A equipe da (nome do projeto), é composta por jovens desenvolvedoresFull Stack. Os membros
                    Alan Diego, Ariane Gariso, Esdras Teixeira,
                    Fabiana Macedo e Nataly Flores Pereira, alunos do
                    curso de programação da Recode Pro, tiveram
                    como desafio, dado por esta escola, produzir um projeto
                    social que promovesse a inserção de pessoas em
                    situação de vulnerabilidade, no mercado de trabalho.
                    A partir dessa inspiração, nasceu
                    o projeto apaixonante (nome).
            </div>

            <div id=box>
                <h4 class="h3-responsive mb-4">Missão</h4>
                <p class="d-flex mx-2 mb-2 text-center">
                    A nossa missão é formar alunos com habilidades
                    técnicas e socioemocionais, a fim de
                    capacita-los para atuar no mercado de
                    trabalho com excelência.
            </div>

        </div>

    </main>
</body>

</html>