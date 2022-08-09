<?php

    $vet = array("mouse", "teclado", "monitor", "memória",  "impressora", "microfone", "cpu");
    $tam = count($vet);      /* a variavel '$tam' com a função 'count' retorna o tamanho de '$vet' */
    $i = 0;

    echo "Loop While<br/><br/>";
    $i = 0;
    do {      /* while(condição) */
        echo "$vet[$i]<br/>";       /* o primeiro item do '$vet' a ser impresso é o item da posição 0 e depois será icrementado valendo 1 e assim sucessivamente */
        $i++;       /* a incrementação do contador '$i' dentro do 'while' é uma regra */
        if($vet[$i] == "monitor") {        /* se o elemento '$vet' na posição indice '$i' for igual a 'sair' o 'while' é interrompido */
            break;
        }
    }while($i < $tam);

    echo "<br/><hr/><br/>";
    echo "Loop Do While<br/><br/>";
    $i = 0;
    do {      
        echo "$vet[$i]<br/>";       
        $i++;       
        if($vet[$i] == "memória") {       
            break;
            
        }
    }while($i < $tam);

    echo "<br/><hr/><br/>";
    echo "Loop For<br/><br/>";
    for($i = 0; $i < $tam; $i++) {
        if($vet[$i] == "impressora") {
            break;
        }
        echo "$vet[$i]<br/>"; 
    }

    echo "<br/><hr/><br/>";
    echo "Loop Foreach<br/><br/>";
    foreach($vet as $pc) {     /* em 'foreach é preciso indicar o vetor '$vet' e criar uma variável que vai receber o elemento */
        if($pc == "microfone") {
            break;
        }
        echo "$pc<br/>"; 
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREAK</title>
</head>
<body>
    
</body>
</html>