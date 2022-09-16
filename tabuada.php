<?php

    function Tabuada($tabuada, $valor) {
        $contador = 0;

        while($contador <= $valor) {
            $resutado = $tabuada * $contador;

            echo $tabuada. " X " .$contador. " = " .$resutado. "<br>";
            $contador++;
        }
    }
    echo "Tabuada até 100 <br>";
    Tabuada(2, 100)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    
</body>
</html>