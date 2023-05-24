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
        <h1>Conversor de Moedas v2.0 - Usando API</h1>
        <?php 

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $dolar = $dados['value'][0]['cotacaoCompra'];

        $dinheiro = $_POST["dinheiro"];
        $saldoDolar = $dinheiro / $dolar;
        $dolarFormatado = number_format($saldoDolar, 2);

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);


        echo "Seus ". numfmt_format_currency($padrao, $dinheiro, "BRL"). " equivalem a <b>US$". $dolarFormatado ."</b><br/><br/>";
        echo "<small><b>*Cotacão ". numfmt_format_currency($padrao, $dolar, "USD") ."</b> <a href=\"https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUZpbmFsQ290YWNhbyI6IjA0LTI3LTIwMjMiLCJkYXRhSW5pY2lhbCI6IjA0LTIwLTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19\" target=\"_blank\">informada diretamente do Banco Central</a>.</small><br/>"
        ?>
        <input type="button" onclick="javascript:history.go(-1)" value="Voltar">
    </section>
</body>
</html>