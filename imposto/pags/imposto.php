<?php

$valormes = filter_input(INPUT_GET, "inicio", FILTER_VALIDATE_FLOAT);
$horasmes = filter_input(INPUT_GET, "final", FILTER_VALIDATE_FLOAT);
$totalmes = $valormes * $horasmes;
$impostoPago = $totalmes * 0.05;
$valorCimposto = $totalmes - $impostoPago;

if ($totalmes >= 2000) {
    $mensagem = "Você recebera " . $valorCimposto . " a quantia paga de imposto desse mês foi de " . $impostoPago . ".";
} else {
    $mensagem = "Você recebera " . $totalmes . " e não tera desconto de imposto esse mês";
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador salário líquido</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <div class="main">
        <h1> Contador salário líquido </h1>
        <div class="coluna">
            <ul>
                <p><?= $mensagem; ?></p>
            </ul>
        </div>
    </div>
</body>

</html>