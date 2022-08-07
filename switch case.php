<?php

    $opc = 1;       /* 1:PHP - 2:SQL - 3:LARAVEL - 4:HTML */

    switch ($opc) {     /* 'switch' verifica o valor da variavel e toma uma decisão */
        case 1:
            echo "PHP";
            break;      /* 'break' indica que os comandos deste 'case' chegou ao fim */
        case 2:
            echo "SQL";
            break;
        case 3:
            echo "C#";
            break;
        case 4:
            echo "LARAVEL";
            break;
        case 5:
            echo "ANGULAR";
            break;
        case 6:
            echo "HTML";
            break;
        default:        /* se '$opc' esteja diferente de todos 'case' cai, em 'default' e apresenta seu echo */
            echo "Tem outros repositorios, apreçie... ";
    }

    echo "<hr/>";

    switch ($opc) {
        case ($opc <= 3 && $opc > 0);
            echo "Linguagem de programação";
            break;

        case 4:
            echo "Framework";
            break;

        case 5:
            echo "Framework";
            break;

        case 6:
            echo "Linguagem de marcação";
            break;

        


    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condiçional SWITCH CASE</title>
</head>
<body>
    
</body>
</html>