<?php
$numero1 = filter_input(INPUT_GET, "numero1", filter: FILTER_VALIDATE_INT);
$numero2 = filter_input(INPUT_GET, "numero2", filter: FILTER_VALIDATE_INT);
$numero3 = filter_input(INPUT_GET, "numero3", filter: FILTER_VALIDATE_INT);
$par = 0;
$impar = 0;


$resultado1 = $numero1 % 2;
$resultado2 = $numero2 % 2;
$resultado3 = $numero3 % 2;

$resultados = [$resultado1, $resultado2, $resultado3];
for ($i = 0; $i < count($resultados); $i++)

    if ($resultados[$i] == 0) {
        $par = $par + 1;
    } else {
        $impar = $impar + 1;
    }


$mensagem = "Tem " . $par . " numeros pares e " . $impar . " numeros impar.";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou par</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Resultado</h1>
    <div id="resultado">

        <?= $mensagem; ?>

    </div>
</body>

</html>