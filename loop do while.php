<?php

    $i = 4;
    $tam = 3;

    echo "Loop Do While";
    do {
        echo "<pre>A variavel i tem o valor..: $i<br/>";       /* a tag 'pre' é um comando de pré formatação */
        echo "A variavel tam tem o valor: $tam</pre><br/>";
        $i++;
    } while($i < $tam);     /* 'loop do while' permite que o bloco de comandos seja executado pelo menos uma vez */

    echo "<hr/>";

    echo "loop While";
    $i = 4;
    $tam = 3;
    while($i < $tam) {
        echo "<pre>A variavel i tem o valor..: $i<br/>";       
        echo "A variavel tam tem o valor: $tam</pre><br/>";
        $i++;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP DO WHILE</title>
</head>
<body>
    
</body>
</html>