<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite a temperatura atual:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="celsius_fahrenheit">Converter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['celsius_fahrenheit'])) { 
            $NUMERO = $_POST['numero'];
            $celsius = $NUMERO;
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<p>$celsius graus Celsius equivalem a $fahrenheit graus Fahrenheit.</p>";
        }
    }
    ?>
</body>

</html>
</html>