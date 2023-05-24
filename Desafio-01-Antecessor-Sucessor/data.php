<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo os Números</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <section>
        <?php 
        $numero = $_POST["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo("O número escolhido foi <b>$numero</b>")."</br>";
        echo("O seu antecessor é ").($numero -1)."</br>";
        echo("O seu sucessor é $sucessor")."</br></br>";
        
        ?>
        <input type="button" onclick="javascript:history.go(-1)" value="Voltar">
    </section>
</body>
</html>