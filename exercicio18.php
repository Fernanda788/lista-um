<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero1">Digite um número:</label>
        <input type="number1" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite outro número:</label>
        <input type="number2" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Digite outro número:</label>
        <input type="number3" id="numero3" name="numero3" required>
        <br><br>
        <button type="submit" name="numero_maior">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['numero_maior'])) { // Se há um conteúdo e o botão é pressionado...
            $NUMERO1 = $_POST['numero1'];
            $NUMERO2 = $_POST['numero2'];
            $NUMERO3 = $_POST['numero3'];

            if ($NUMERO1 >= $NUMERO2 && $NUMERO1 >= $NUMERO3) {
                echo "O maior número é: $NUMERO1";
            } else if ($NUMERO2 >= $NUMERO1 && $NUMERO2 >= $NUMERO3) {
                echo "O maior número é: $NUMERO2";
            } else {
                echo "O maior número é: $NUMERO3";
            }
        }
    }
    ?>
</body>

</html>