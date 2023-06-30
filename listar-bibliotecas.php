<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bibliotecas</title>
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
            <h1>BIBLIOTECAS</h1>
        </div>

        <?php
        $conexao = mysqli_connect("localhost", "root", "Epaine!7", "biblioteca");
        $query = "SELECT * FROM biblio";
        $result = mysqli_query($conexao, $query);
        ?>

        <section class="table-wrapper">
            <table>
                <tr class="table-header">
                    <th>Código da biblioteca</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Email</th>
                </tr>
                <?php while ($biblio = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $biblio['cod_biblio']; ?></td>
                        <td><?php echo $biblio['nome_biblio']; ?></td>
                        <td><?php echo $biblio['fone_biblio']; ?></td>
                        <td><?php echo $biblio['endereco_biblio']; ?></td>
                        <td><?php echo $biblio['email_biblio']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>

        <section class="btns-wrapper">
            <button type="button" onclick="window.location.href='consultar-biblio.php'">Consultar uma biblioteca</button>
            <button type="button" onclick="window.location.href='inclui-biblioteca.php'">Incluir uma biblioteca</button>
            <button type="button" onclick="window.location.href='altera-biblioteca.php'">Alterar uma biblioteca</button>
            <button type="button" onclick="window.location.href='exclui-biblioteca.php'">Excluir uma biblioteca</button>
            <button type="button" onclick="window.location.href='form-inclui.php'">Incluir um livro</button>
        </section>
    </main>
</body>
</html>