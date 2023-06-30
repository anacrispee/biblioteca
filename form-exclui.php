<?php

if (isset($_POST['submit'])) {

    echo '<script>
    var confirmacao = confirm("Tem certeza que deseja excluir o livro?");
    if (confirmacao) {
        window.location.href = "form-exclui.php?livro_id=' . $exclui_livro . '";
        alert("Livro excluído com sucesso!");
    }
    </script>';
    
    echo '<meta http-equiv="refresh" content="1;url=listar-bibliotecas.php">';


    include_once('config.php');

    if (isset($_POST['exclui_livro'])) {

        $exclui_livro = $_POST['exclui_livro'];
        $cod_b = $_POST['cod_b'];

        $query = "DELETE FROM livros WHERE cod_livro = $exclui_livro AND cod_b = $cod_b";
        $result = mysqli_query($conexao, $query);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/bookicon.avif" type="image/x-icon">
    <link rel="stylesheet" href="style/exclui-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <title>Exclusão de Livro</title>
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>EXCLUSÃO DE LIVRO</h1>
        </div>

        <section class="form-wrapper">
            <form action="form-exclui.php" method="POST">

                <label for="cod_b">Código da biblioteca que o livro se encontra:</label>
                <input type="text" id="cod_b" name="cod_b" required><br><br>

                <label for="cod_livro">Código do livro a ser excluído:</label>
                <input type="text" id="exclui_livro" name="exclui_livro" required><br><br>

                <input class="submit-btn" type="submit" value="Excluir" name="submit">
            </form>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
            <button type="button" onclick="window.location.href='form-inclui.php'">Incluir livro</button>
        </section>
    </main>
</body>
</html>