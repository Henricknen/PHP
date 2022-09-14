<?php

    echo "Sequencia de fibonacci até 25<br>";
    $ultimo = 1;
    $penultimo = 0;

    echo "0<br>";
    echo "1<br>";

    for($i = 1; $i <= 25; $i++) {
        $atual = $ultimo + $penultimo;
        echo $atual. "<br>";

        $penultimo = $ultimo;
        $ultimo = $atual;
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci</title>
</head>
<body>
    
</body>
</html>