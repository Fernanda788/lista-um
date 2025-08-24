<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_tabuada">Calcular tabuada</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_tabuada'])) {
            for ($i = 0; $i <= 10; $i++) {
                $NUMERO = $_POST['numero'];
                $resultado = $NUMERO * $i;
                echo "<p>$NUMERO x $i = $resultado</p>";
            }
        }
    }
    ?>


</body>

</html>