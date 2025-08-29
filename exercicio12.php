<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>

<body>
    <form method="POST" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar_vogais">Verificar</button>
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_vogais'])) { 
            $PALAVRA = $_POST['palavra'];
            $contador = 0;

            if (preg_match_all("/[aeiouAEIOU]/", $PALAVRA, $matches)) {
                $contador = count($matches[0]);
            }
        }
            echo "'$PALAVRA' tem $contador vogais.";
        }
?>

</body>

</html>