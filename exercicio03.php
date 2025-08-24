<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_positivo_negativo">Verificar</button>
    </form>

    <?php
    // GET ou POST. Já definido como POST no form. GET busca; POST envia
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_positivo_negativo'])) { // Se há um conteúdo e o botão é pressionado...
            $NUMERO = $_POST['numero'];
            if ($NUMERO > 0) {
                echo "<p>$NUMERO é <strong>positivo</strong>.</p>";
            } else if ($NUMERO < 0) {
                echo "<p>$NUMERO é <strong>negativo</strong>.</p>";
            } else {
                echo "<p>$NUMERO é <strong>zero</strong>.</p>";
            }
        }
    }
    ?>
</body>

</html>