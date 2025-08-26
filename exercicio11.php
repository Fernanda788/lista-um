<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_palindromo'])) { 
            $PALAVRA = $_POST['palavra'];
            if ($PALAVRA == strrev($PALAVRA)) {
                echo "A palavra '$PALAVRA' é um palíndromo.";
            } else {
                echo "A palavra '$PALAVRA' não é um palíndromo.";
            }
        }
    }
    ?>
</body>

</html>