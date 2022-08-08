<?php

    $linguagens = array("PHP", "Python", "Java", "C#", "javaScript");

    foreach($linguagens as $programacao) {     /* este 'foreach' faz a listagem do array '$linguagens' e indica uma variável que irá receber os elementos deste array */
        echo "Linguagem<br/>";
        echo "$programacao<br/>";

        /*
        if($programacao == "Java") {        /* código de parada em determinado item da lista
            break;
        }
        */
    }

    echo "<hr/>";
    foreach($linguagens as $programacao) {
        if($programacao == "PHP") {
            echo "Tem linguagem 'PHP' neste GITHUB<br/>";
            break;      /* executa uma parada 'break' quando encontrar o elemento 'PHP' na lista */
        }

        if($programacao == "C++")
            echo "Também tem linguagem 'C#'<br/>";
        else
            echo "Linguagem de programação não encontrada na lista<br/>";        /* caso a liguagem não esteje na lista retornará está menssagem a cada interação do 'foreach' */
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP FOREACH</title>
</head>
<body>
    
</body>
</html>