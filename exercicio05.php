<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
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
        if (isset($_POST['verificar_somas'])) { // Se há um conteúdo e o botão é pressionado...
            $NUMERO1 = $_POST['numero1'];
            $NUMERO2 = $_POST['numero2'];

            function somaDivisores($numero)  {  
                $soma = 0;  
                for ($i = 1; $i <= $numero; $i++) {  
                    if ($numero % $i == 0) {  
                        $soma += $i;  
                    }  
                }  
                return $soma;  
                }
            } 
                $somaDivisores1 = somaDivisores($NUMERO1);
                $somaDivisores2 = somaDivisores($NUMERO2);

                if($somaDivisores1 == $NUMERO2 && $somaDivisores2 == $NUMERO1) {
                    echo "$NUMERO1 e $NUMERO2 são números amigos :)";
                } else {
                    echo "$NUMERO1 e $NUMERO2 não são números amigos :(";
                }
        }

    ?>


</body>

</html>

</html>
