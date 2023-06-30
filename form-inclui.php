<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $cod_b = $_POST['cod_b'];
    $nome_livro = $_POST['nome_livro'];
    $autor_livro = $_POST['autor_livro'];
    $editora_livro = $_POST['editora_livro'];
    $isbn = $_POST['isbn'];
    $qtd_paginas = $_POST['qtd_paginas'];

    $result = mysqli_query($conexao, "INSERT INTO livros(cod_b, nome_livro, autor_livro, editora_livro, isbn, qtd_paginas) VALUES ('$cod_b', '$nome_livro', '$autor_livro', '$editora_livro', '$isbn', '$qtd_paginas') ");
    echo '<script>alert("Livro incluído com sucesso na biblioteca!");</script>';
    echo '<meta http-equiv="refresh" content="1;url=listar-bibliotecas.php">';

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inclusão de livro</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imgs/bookicon.avif" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/incluir-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h2>INCLUSÃO DE LIVRO</h2>
        </div>

        <section class="form-wrapper">
                <form action="form-inclui.php" method="POST">

                    <label for="cod_b">Código da Biblioteca</label>
                    <input type="text" id="cod_b" name="cod_b" required><br><br>

                    <label for="nome_livro">Nome do Livro</label>
                    <input type="text" id="nome_livro" name="nome_livro" required><br><br>

                    <label for="autor_livro">Autor do Livro</label>
                    <input type="text" id="autor_livro" name="autor_livro" required><br><br>

                    <label for="editora_livro">Editora do Livro</label>
                    <input type="text" id="editora_livro" name="editora_livro" required><br><br>

                    <label for="isbn">ISBN</label>
                    <input type="text" id="isbn" name="isbn" required><br><br>

                    <label for="qtd_paginas">Quantidade de Páginas</label>
                    <input type="number" id="qtd_paginas" name="qtd_paginas" required><br><br>

                <input class="submit-btn" type="submit" value="Incluir" name="submit">
            </form>
        </section>
        
        <section class="btns-wrapper">
        <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Lista de Bibliotecas</button>
        </section>
    </main>
</body>
</html>
