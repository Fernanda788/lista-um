<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['verificar_par_impar'])) {
        $NUMERO = $_POST['numero'];
        $divisores = [];
        for ($i = 1; $i <= $NUMERO; $i++) {
            if ($NUMERO % $i == 0) { 
                echo $i . "<br>";
                $divisores[] = $i;
            }
        }
        $soma1 = array_sum($divisores);
        echo "$soma1";
    }
}

    ?>
</body>

</html>