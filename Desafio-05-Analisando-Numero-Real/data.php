<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo o Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
       

        <?php  
            $numero = $_POST["numero"];
            $parteInteira = (int) $numero;
            $parteFracionaria = $numero - $parteInteira;

            echo "Analisando o número <strong>". number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:";
            echo "<ul><li>A Parte inteira do número é <strong>".$parteInteira."</strong></li>";
            echo "<li>A Parte fracionária do número é <strong>".number_format($parteFracionaria, 3, ",", ".")."</strong></li></ul>";
        ?>
        <input type="button" onclick="javascript:history.go(-1)" value="Voltar">
    </section>
</body>
</html>