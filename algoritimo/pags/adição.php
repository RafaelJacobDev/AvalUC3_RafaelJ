<?php
$numero = filter_input(INPUT_GET, "numero", filter: FILTER_VALIDATE_INT);
$conta = filter_input(INPUT_GET, "conta");
$contador = 0;

$resultado = "";

if ($conta=="Adição" ) {
    while ($contador <= 10) {
    $calculo = $numero + $contador;
    $resultado .= "<li>$numero + $contador = $calculo</li>";
    $contador = $contador + 1;
}
}else{
     while ($contador <= 10) {
    $calculo = $numero - $contador;
    $resultado .= "<li>$numero - $contador = $calculo</li>";
    $contador = $contador + 1;
}
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adição ou Subtração</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1> Adição ou Subtração </h1>
    <ul>
        <?= $resultado; ?>
    </ul>
</body>

</html>