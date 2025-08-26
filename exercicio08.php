<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
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
        $numeros = []; // Array para guardar os números pares

        for ($i = 1; $i <= $NUMERO; $i++) {
            if ($i % 2 == 0) { // Verifica se $i é par
                echo $i . "<br>";
                $numeros[] = $i; // Adiciona o número par ao array
            }
        }

        echo "E a quantidade de números pares é: " . count($numeros);
    }
}
?>
    

</body>
</html>
