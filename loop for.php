<?php

$i = 0;
$tam = 5;
$vet = array($tam);         /* este 'array' terá o tamanho igual da varivel '$tam' */

for($i = 0; $i < $tam; $i++) {       /* for(iniçialização; condição; incrementação) */
    echo "Valor de i: $i<br/>";
}

echo "<br/>";
for($i = 0; $i < 10; $i++) {        /* criando 'for' para fazer uma linha menor que 10 caracteres */
    echo "-for";
}

echo "<br/><br/>";

for($i = 0; $i < $tam; $i++) {
    $vet[$i] = $i * 2;
}

for($i = 0; $i < $tam; $i++) {
    echo "Valor da posição de $i: $vet[$i]<br/>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP FOR</title>
</head>
<body>
    
</body>
</html>