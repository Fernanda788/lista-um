<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_num_perfeito">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['verificar_num_perfeito'])) {
        $NUMERO = $_POST['numero'];
        $divisores = [];
        for ($i = 1; $i <= $NUMERO; $i++) {
            if ($NUMERO % $i == 0) { 
                echo $i . "<br>";
                $divisores[] = $i;
            }
        }
        $soma1 = array_sum($divisores);
        echo "E a soma dos divisores é: $soma1";

        $soma2 = $soma1 - $NUMERO; // Para ser um número perfeito, a soma dos divisores próprios (excluindo o próprio número) deve ser igual ao número

        $num_perfeito = false;
        if ($soma2 == $NUMERO) {
            $num_perfeito = true;
            echo "<br>O número $NUMERO é um número perfeito.";
        } else {
            echo "<br>O número $NUMERO não é um número perfeito.";
        }
    }
}

    ?>
</body>

</html>