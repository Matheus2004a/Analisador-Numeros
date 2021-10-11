<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimindo maior número</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        session_start();
    ?>
    <form action="Maior-Num.php" method="post">
        <h2>Analisador de números</h2>
        <fieldset>
            Digite o 1º número: <input type="number" name="num1">
        </fieldset>
        <fieldset>
            Digite o 2º número: <input type="number" name="num2">
        </fieldset>
        <p>
            <?php
                echo $_SESSION['resp'];
            ?>
        </p>
        <fieldset id="buttons">
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </fieldset>
    </form>
</body>

</html>