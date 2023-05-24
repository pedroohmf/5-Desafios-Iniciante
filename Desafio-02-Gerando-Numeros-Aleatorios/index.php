<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
        $number = rand(0, 100);
        echo " <h1>Trabalhando com números aleatórios</h1>";
        echo "<p> Gerando um número entre 0 e 100...</p>";
        echo "O valor gerado foi <strong>$number</strong>";
    ?>
    <input type="button" onclick="location.reload()" value="Gerar outro">
    </section>
</body>
</html>