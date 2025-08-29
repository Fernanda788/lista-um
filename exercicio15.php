<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>

<body>
    <form method="POST" action="">
        <label for="peso">Digite o seu peso (kg):</label>
        <input type="number" id="peso" name="peso" required>
        <br><br>
        <label for="altura">Digite a sua altura (cm):</label>
        <input type="number" id="altura" name="altura" required>
        <br><br>
        <button type="submit" name="calcular_imc">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_imc'])) {
            $PESO = $_POST['peso'];
            $ALTURA = $_POST['altura'];
                $imc = $PESO / ($ALTURA * $ALTURA);
                echo "IMC = " . number_format($imc * 10000, 2) . "<br>";
            }
        }
    ?>
</body>

</html>