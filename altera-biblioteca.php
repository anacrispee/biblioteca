<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $altera_biblio = $_POST['altera_biblio'];

    $nome_biblio = $_POST['nome_biblio'];
    $fone_biblio = $_POST['fone_biblio'];
    $endereco_biblio = $_POST['endereco_biblio'];
    $email_biblio = $_POST['email_biblio'];

    if ((empty($nome_biblio)) || (empty($fone_biblio)) || (empty($endereco_biblio)) || (empty($email_biblio))) {

        echo '<script>alert("Todos os campos devem ser preenchidos!");</script>';
       
    } else {
        $result = mysqli_query($conexao, "UPDATE biblio SET nome_biblio = '$nome_biblio', fone_biblio = '$fone_biblio', endereco_biblio = '$endereco_biblio', email_biblio = '$email_biblio' WHERE cod_biblio = '$altera_biblio'");
        if ($result) {
            echo '<script>alert("Biblioteca alterada com sucesso!");</script>';
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
    <title>Alteração de Biblioteca</title>
</head>
<body class="biblio-body">
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>ALTERAÇÃO DE BIBLIOTECA:</h1>
        </div>

        <section class="form-wrapper">
            <form action="altera-biblioteca.php" method="POST">

                <label for="cod_livro">Código da biblioteca a ser alterada</label>
                <input type="text" id="altera_biblio" name="altera_biblio" required><br><br>

                <label for="nome_livro">Nome da Biblioteca</label>
                <input type="text" id="nome_biblio" name="nome_biblio"><br><br>

                <label for="autor_livro">Telefone</label>
                <input type="text" id="fone_biblio" name="fone_biblio"><br><br>

                <label for="editora_livro">Endereço</label>
                <input type="text" id="endereco_biblio" name="endereco_biblio"><br><br>

                <label for="isbn">Email</label>
                <input type="text" id="email_biblio" name="email_biblio"><br><br>

                <input class="submit-btn" type="submit" value="Alterar" name="submit">
            </form>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
            <button type="button" onclick="window.location.href='exclui-biblioteca.php'">Excluir uma biblioteca</button>
            <button type="button" onclick="window.location.href='inclui-biblioteca.php'">Incluir uma biblioteca</button>
        </section>
    </main>
</body>
</html>