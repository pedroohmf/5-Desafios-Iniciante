<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados conversor v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        $dinheiro = $_POST["dinheiro"];
        $dolar = 4.98;
        $saldoDolar = $dinheiro / $dolar;
        $dolarFormatado = number_format($saldoDolar, 2);
        echo "Seus R$ $dinheiro equivalem a <b>US$$dolarFormatado</b><br/><br/>";
        echo "<small><b>*Cotacão fixa de U$$dolar</b> informada diretamente ao código.</small><br/>"
        ?>
        <input type="button" onclick="javascript:history.go(-1)" value="Voltar">
    </section>
</body>
</html>