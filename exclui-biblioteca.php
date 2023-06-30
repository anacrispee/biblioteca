<?php

if (isset($_POST['submit'])) {

    echo '<script>
    var confirmacao = confirm("Tem certeza que deseja excluir essa biblioteca?");
    if (confirmacao) {
        window.location.href = "exclui-biblioteca.php?biblio_id=' . $exclui_biblio . '";
        alert("Biblioteca incluída com sucesso!");
    }
    </script>';

    include_once('config.php');

    if (isset($_POST['exclui_biblio'])) {

        $exclui_biblio = $_POST['exclui_biblio'];

        $query = "DELETE FROM biblio WHERE cod_biblio = $exclui_biblio";
        $result = mysqli_query($conexao, $query);

            echo '<script>
                    (alert("Biblioteca excluída do banco de dados!"))
                </script>';
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
    <title>Exclusão de Biblioteca</title>
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>EXCLUSÃO DE BIBLIOTECA</h1>
        </div>

        <section class="form-wrapper">
            <form action="exclui-biblioteca.php" method="POST">

                <label for="cod_livro">Código da biblioteca a ser excluído:</label>
                <input type="text" id="exclui_biblio" name="exclui_biblio" required><br><br>

                <input class="submit-btn" type="submit" value="Excluir" name="submit">
            </form>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
            <button type="button" onclick="window.location.href='inclui-biblioteca.php'">Incluir biblioteca</button>
        </section>
    </main>
</body>
</html>