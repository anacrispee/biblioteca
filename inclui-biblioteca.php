<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome_biblio = $_POST['nome_biblio'];
    $fone_biblio = $_POST['fone_biblio'];
    $endereco_biblio = $_POST['endereco_biblio'];
    $email_biblio = $_POST['email_biblio'];

    $result = mysqli_query($conexao, "INSERT INTO biblio(nome_biblio, fone_biblio, endereco_biblio, email_biblio) VALUES ('$nome_biblio', '$fone_biblio', '$endereco_biblio', '$email_biblio') ");
    echo '<script>alert("Biblioteca incluída com sucesso!");</script>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inclusão de Biblioteca</title>
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
            <h2>INCLUSÃO DE BIBLIOTECA</h2>
        </div>

        <section class="form-wrapper">
                <form action="inclui-biblioteca.php" method="POST">
                    <label for="nome_biblio">Nome da Biblioteca</label>
                    <input type="text" id="nome_biblio" name="nome_biblio" required><br><br>

                    <label for="fone_biblio">Telefone</label>
                    <input type="text" id="fone_biblio" name="fone_biblio" required><br><br>

                    <label for="editora_livro">Endereço</label>
                    <input type="text" id="endereco_biblio" name="endereco_biblio" required><br><br>

                    <label for="isbn">Email</label>
                    <input type="text" id="email_biblio" name="email_biblio" required><br><br>

                <input class="submit-btn" type="submit" value="Incluir" name="submit">
            </form>
        </section>
        
        <section class="btns-wrapper">
        <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Lista de bibliotecas</button>
        </section>
    </main>
</body>
</html>
