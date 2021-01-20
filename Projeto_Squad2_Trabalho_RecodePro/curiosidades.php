<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/home2.css">
    <link rel="stylesheet" href="./css/curiosidades.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <?php
        include_once('menu.html');
    ?>
    
    <h1 class="h1-responsive mb-4">Curiosidades sobre a comunidade surda</h1>

    <div class="curiosidades mt-5">
        <div class="row"> 
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <video class="card-img-top" controls="controls" autoplay>
                        <source src="./videos/curiosidades.mp4" type="video/mp4" />
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Curiosidades</h5>
                        <p class="card-text">Aqui é a área do nosso site destinada a curiosidades e informações relevantes sobre a comunidade surda. </p>
                        <a href="curiosidades.php" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>   
            </div> 
            
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./imagens/handtalk.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Hand Talk</h5>
                        <p class="card-text">5 fatos que você deveria saber sobre a comunidade surda. Neste Blog você vai conhecer um pouco mais sobre a comunidade surda e a importância da acessibilidade.</p>
                        <a href="https://blog.handtalk.me/5-fatos-comunidade-surda-libras/" target="_blank" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div> 

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./imagens/setembroazul.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Você sabia???</h5>
                        <p class="card-text">Setembro Azul é o mês da visibilidade da Comunidade Surda Brasileira, uma ação que traz conscientização e homenagens a essa população.</p>
                        <a href="https://www.libras.com.br/setembro-azul" target="_blank" class="btn btn-primary">Saiba mais!</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

   <!--  <div class="curiosidades mt-5">
        <div class="row"> 
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>   
            </div> 
            
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> 

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php
       /*  include_once('footer.html'); */
    ?>  
</body>

</html>