<?php

    $texto = "Repositorio de PHP";
    $nome = "Proprietário: Luis Henrique Silva Ferreira";
    $reposi = "Link: https://github.com/Henricknen/PHP";

                        /* '?' indica que vou fazer uma passagem de valores,'&' separa as variáveis, '?' se usa só no inicio  */
    echo "<a href = pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&rep=".urlencode($reposi)." target=_self>Abrir Página 1</a>"      /* link para o arquivo chamado 'pg1.php' */
                             /* 'urlencode' transforma o texto em formato de url */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSAGEM DE VALORES</title>
</head>
<body>
    
</body>
</html>