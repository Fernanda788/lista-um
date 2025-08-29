<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>

<body>
    <form method="POST" action="">
        <label for="dia">Digite uma dia:</label>
        <input type="number" id="dia" name="dia" required>
        <br><br>
        <label for="mes">Digite um mês:</label>
        <input type="number" id="mes" name="mes" required>
        <br><br>
        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br><br>
        <button type="submit" name="verificar_data">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_data'])) {
            $DIA = $_POST['dia'];
            $MES = $_POST['mes'];
            $ANO = $_POST['ano'];
            if (checkdate($MES, $DIA, $ANO)) {
                echo "A data é válida.";
            } else {
                echo "A data não é válida.";
            }
        }
    }
    ?>

</body>
</html>