<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero1">Digite um número:</label>
        <input type="number1" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite outro número:</label>
        <input type="number2" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit" name="verificar_somas">Verificar</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['verificar_somas'])) {
        $NUMERO1 = (int)$_POST['numero1'];
        $NUMERO2 = (int)$_POST['numero2'];

        $soma = 0;

        for ($i = $NUMERO1 + 1; $i < $NUMERO2; $i++) {
            $soma += $i;
        }

        echo $soma;
    }
}
?>

</body>

</html>
