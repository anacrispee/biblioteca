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
    <title>Consultar Biblioteca</title>
</head>
<body>
    <main class="main-content-wrapper">

        <div class="title-wrapper">
            <h1>CONSULTAR BIBLIOTECA</h1>
        </div>

        <section class="form-wrapper">
            <form action="listar-livros.php" method="POST">

                <label for="cod_b">Código da biblioteca a ser consultada:</label>
                <input type="text" id="cod_b" name="cod_b" required><br><br>

                <input class="submit-btn" type="submit" value="Consultar" name="submit">
            </form>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='listar-bibliotecas.php'">Ver lista de bibliotecas</button>
        </section>
    </main>
</body>
</html>