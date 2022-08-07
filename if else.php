<?php

$nota = 50;

if($nota >= 70) {       /* condição */
    echo "<font color=blue>Aprovado</font>";
} else if($nota >= 50) {
    echo "<font color=green>Recuperação</font>";    
} else {           /* se não entrar em nenhuma das condições acima retorna a menssagem abaixo */
    echo "<font color=red>Reprovado</font>";
}

if(($nota >= 40) & ($nota <= 60)) {
    echo "<hr/>Foi seleçionado";
} else {
    echo "<hr/>Não foi seleçionado";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condiçional IF ELSE</title>
</head>
<body>
    
</body>
</html>