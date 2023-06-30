<?php

$cod_b = $_POST['cod_b'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <link rel="shortcut icon" href="imgs/bookicon.avif" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/listar-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>BIBLIOTECA <?php echo $cod_b; ?></h1>
        </div>

        <?php
        $conexao = mysqli_connect("localhost", "root", "Epaine!7", "biblioteca");
        $query = "SELECT * FROM livros WHERE cod_b = '$cod_b'";
        $result = mysqli_query($conexao, $query);
        ?>

        <section class="table-wrapper">
            <table>
                <tr class="table-header">
                    <th>Código</th>
                    <th>Livro</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>ISBN</th>
                    <th>Qtd. Páginas</th>
                </tr>
                <?php while ($livro = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $livro['cod_livro']; ?></td>
                        <td><?php echo $livro['nome_livro']; ?></td>
                        <td><?php echo $livro['autor_livro']; ?></td>
                        <td><?php echo $livro['editora_livro']; ?></td>
                        <td><?php echo $livro['isbn']; ?></td>
                        <td><?php echo $livro['qtd_paginas']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>

        <section class="btns-wrapper">
        <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
            <button type="button" onclick="window.location.href='form-inclui.php'">Incluir um livro</button>
            <button type="button" onclick="window.location.href='form-altera.php'">Alterar um livro</button>
            <button type="button" onclick="window.location.href='form-exclui.php'">Excluir um livro</button>
        </section>
    </main>
</body>
</html>