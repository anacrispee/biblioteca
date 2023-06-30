<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $altera_livro = $_POST['altera_livro'];

    $cod_b = $_POST['cod_b'];
    $nome_livro = $_POST['nome_livro'];
    $autor_livro = $_POST['autor_livro'];
    $editora_livro = $_POST['editora_livro'];
    $isbn = $_POST['isbn'];
    $qtd_paginas = $_POST['qtd_paginas'];

    if ( empty($cod_b) || (empty($nome_livro)) || (empty($autor_livro)) || (empty($editora_livro)) || (empty($isbn)) || (empty($qtd_paginas))) {

        echo '<script>alert("Todos os campos devem ser preenchidos!");</script>';
       
    } else {
        $result = mysqli_query($conexao, "UPDATE livros SET nome_livro = '$nome_livro', autor_livro = '$autor_livro', editora_livro = '$editora_livro', isbn = '$isbn', qtd_paginas = '$qtd_paginas' WHERE cod_livro = '$altera_livro' AND cod_b = '$cod_b'");
        if ($result) {
            echo '<script>alert("Livro alterado com sucesso!");</script>';
            echo '<meta http-equiv="refresh" content="1;url=listar-bibliotecas.php">';

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/bookicon.avif" type="image/x-icon">
    <link rel="stylesheet" href="style/altera-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <title>Alteração de Livro</title>
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>ALTERAÇÃO DE LIVRO:</h1>
        </div>

        <section class="form-wrapper">
            <form action="form-altera.php" method="POST">

            <label for="cod_b">Código da biblioteca do livro:</label>
                <input type="text" id="cod_b" name="cod_b" required><br><br>

                <label for="cod_livro">Código do livro a ser alterado:</label>
                <input type="text" id="altera_livro" name="altera_livro" required><br><br>

                <label for="nome_livro">Nome do Livro:</label>
                <input type="text" id="nome_livro" name="nome_livro"><br><br>

                <label for="autor_livro">Autor do Livro:</label>
                <input type="text" id="autor_livro" name="autor_livro"><br><br>

                <label for="editora_livro">Editora do Livro:</label>
                <input type="text" id="editora_livro" name="editora_livro"><br><br>

                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn"><br><br>

                <label for="qtd_paginas">Quantidade de Páginas:</label>
                <input type="number" id="qtd_paginas" name="qtd_paginas"><br><br>

                <input class="submit-btn" type="submit" value="Alterar" name="submit">
            </form>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
            <button type="button" onclick="window.location.href='form-exclui.php'">Excluir um livro</button>
            <button type="button" onclick="window.location.href='form-inclui.php'">Incluir um livro</button>
        </section>
    </main>
</body>
</html>