<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>

<body>
    <form method="POST" action="">
        <label for="nome">Digite o seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Digite a sua idade (anos completos):</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <button type="submit" name="pode_votar">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pode_votar'])) {
            $NOME = $_POST['nome'];
            $IDADE = $_POST['idade'];
                if ($IDADE == 16) {
                    echo "$NOME, você pode votar.";
                } else if ($IDADE >= 16) {
                    echo "$NOME, você deve votar.";
                } else {
                    echo "$NOME, você não pode votar.";
                }
            }
        }
    ?>
</body>

</html>