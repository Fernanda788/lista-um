<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_fatorial">Calcular</button>
    </form>

    <?php
    $resultado = 1;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_fatorial'])) { // Se há um conteúdo e o botão é pressionado...
            $NUMERO = $_POST['numero'];
            for ($i = 1; $i <= $NUMERO; $i++) {
                $resultado = $resultado * $i;
            }
            echo "<p>$NUMERO! = $resultado</p>";
        }
    }
    ?>
</body>

</html>