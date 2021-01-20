<?php

    include_once '../Backend/conexao.php';

    $sel = "SELECT * FROM usuarios";
    $result = $conn->query($sel);

    $sel2 = "SELECT * FROM admin";
    $result2 = $conn->query($sel2);

    $sel3 = "SELECT * FROM registros";
    $result3 = $conn->query($sel3);

    $sel4 = "SELECT usuarios.nome, usuarios.email, cursos.curso FROM usuarios join cursos ON cursos.id_curso = usuarios.id_curso";
    $result4 = $conn->query($sel4)

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/global.css">
    <link rel="stylesheet" href="./Estilos/home.css">
    <link rel="stylesheet" href="./Estilos/paineladm.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sinal Code - Painel Administrador</title>
</head>
<body>
    <?php
        include_once('menu.html');
    ?>
    <main class="adm1" id="container">
        <section class="section-adm1">
            <div class="div-table-adm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-hover ">
                    <caption><strong> LISTA DE USUÁRIOS</strong></caption>
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result->num_rows > 0): ?> 
                                    <?php while ($usuario = $result->fetch_assoc()): ?>
                                        <tr> 
                                            <th scope="row"><?= $usuario['id']; ?></th>
                                            <td><?= $usuario['nome']; ?></td>
                                            <td><?= $usuario['sobrenome']; ?></td>
                                            <td><?= $usuario['email']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>  
                                    <?php else: ?>    
                                        <div class="alert alert-primary" role="alert">
                                            Não existem usuários cadastrados
                                        </div>
                                <?php endif; ?>    
                        </tbody>
                </table>
            </div>
            <div class="div-table-adm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-hover display dataTable dtr-inline">
                    <caption><strong> MENSAGEM DOS USUÁRIOS	</strong></caption>
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result->num_rows > 0): ?> 
                                    <?php while ($msg = $result3->fetch_assoc()): ?>
                                        <tr> 
                                            <th scope="row"><?= $msg['id']; ?></th>
                                            <td><?= $msg['nome']; ?></td>
                                            <td><?= $msg['email']; ?></td>
                                            <td><?= $msg['telefone']; ?></td>
                                            <td><?= $msg['mensagem']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>  
                                    <?php else: ?>    
                                        <div class="alert alert-primary" role="alert">
                                            Não existem usuários cadastrados
                                        </div>
                                <?php endif; ?>    
                        </tbody>
                </table>
            </div>
            <div class="div-table-adm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-hover display dataTable dtr-inline">
                    <caption><strong> USUÁRIOS E CURSOS </strong></caption>
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result->num_rows > 0): ?> 
                                    <?php while ($admin = $result4->fetch_assoc()): ?>
                                        <tr> 
                                            <th scope="row"><?= $admin['nome']; ?></th>
                                            <td><?= $admin['email']; ?></td>
                                            <td><?= $admin['curso']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>  
                                    <?php else: ?>    
                                        <div class="alert alert-primary" role="alert">
                                            Não existem usuários cadastrados
                                        </div>
                                <?php endif; ?>    
                        </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>