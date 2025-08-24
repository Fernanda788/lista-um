<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>

    <?php
    // GET ou POST. Já definido como POST no form. GET busca; POST envia
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_par_impar'])) { // Se há um conteúdo e o botão é pressionado...
            $NUMERO = $_POST['numero'];
            if ($NUMERO % 2 == 0) {
                echo "<p>O número $NUMERO é <strong>par</strong>.</p>";
            } else {
                echo "<p>O número $NUMERO é <strong>ímpar</strong>.</p>";
            }
        }
    }
    ?>
</body>

</html>