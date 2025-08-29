<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>

<body>
    <form method="POST" action="">
        <label for="ano">Digite um ano:</label>
        <input type="year" id="ano" name="ano" required>
        <button type="submit" name="ano_bissexto">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['ano_bissexto'])) { 
            $ANO = $_POST['ano'];
            if (($ANO % 4 == 0 && $ANO % 100 != 0) || ($ANO % 400 == 0)) {
                echo "<p>O ano $ANO é bissexto.</p>";
            } else {
                echo "<p>O ano $ANO não é bissexto.</p>";
            }
        }
    }
    ?>
</body>

</html>