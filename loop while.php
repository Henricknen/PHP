<?PHP

    $i = 0;
    $tam = 10;
    $vet = array($tam);

    while($i < $tam) {       /* enquanto a condição '$i < $tam' for verdadeira irá retorna o valor da variavel '$i' na menssagem  */
        echo "Valor da variável i: $i<br/>";
        $i++;       /* a cada execução faz uma incrementação ao valor de '$i' */
    }

    echo "<br /><hr/><br/>";

    $i = 0;     /* variavel de controle */
    $tam = 10;
    while($i < $tam) {
        $vet[$i] = $i;       /* adiçionando valores a posições do vetor '$vet' */
        $i++;
    }

    $i = 0;
    $tam = 10;
    while($i < $tam) {         /* 'while' para imprimir os valores */
        echo "$vet[$i]<br/>";
        $i++;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP WHILE</title>
</head>
<body>
    
</body>
</html>