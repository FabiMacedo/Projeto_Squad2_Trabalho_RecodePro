<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinal Code</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/home.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body style="background: rgb(0, 194, 203)">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><!-- Navbar --></a>
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
            <div class="text-white text-left pt-5 px-3" >
                <img class="d-flex" src="./imagens/logoft.png">
                <h1 class="h4-responsive mb-4">Curso de programação para surdos</h1>
                <p class="d-flex mx-2 mb-2 text-center">A Sinal Code desenvolveu uma plataforma digital de cursos na área de programação<br>elaborados para atender exclusivamente a comunidade surda. Todas as aulas são<br>adaptadas com a linguagem de sinais (libras) e legenda, para um melhor<br>desenvolvimento no ensino-aprendizagem.</p>
                <p class="d-flex mx-2 mb-4 text-center">O curso ofertado é 100% gratuito. Contamos com o patrocínio de empresas parceiras <br>nesta empreitada de cunho social.</p>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br>
            
            <div class="text-white text-left pt-5 px-3" >
                <h1 class="h1-responsive mb-5 text-center text-warning">Porque estudar programação</h1>
                <br><br>
                <section class="container">
                    <div class="box1">
                        <p class="text-center"><b class="text-warning">MERCADO</b><br><br>Alta demanda por profissionais no mercado de trabalho</p>
                    </div>
                    <div class="box2">
                        <p class="text-center"><b class="text-warning">SALÁRIOS</b><br><br><b class="text-warning">R$ 5.000,00</b><br><br> média salarial</p>
                    </div>
                    <div class="box3">
                        <p class="text-center"><b class="text-warning">ADAPTAÇÃO</b><br><br> Fácil adaptação do surdo nos processos de desenvolvimento do trabalho</p>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>