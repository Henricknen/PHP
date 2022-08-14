<?php 

    function recursiva($num) {      /* função recursiva */
        
        if($num != 0) {     
            echo "Função com valor $num<br/>";
            recursiva($num - 1);        /* chamando a função subtraida de -1 */
        }
    }

    recursiva(10);

    function fat($num) {        /* função fatorial */
        if ($num < 0) {
            return -1;
        }

        if ($num <= 1) {
            return 1;
        }                       
        return $num * fat($num -1);        /* este 'return' que irá calcular o fatorial, '$num' x função recursiva -1 'fat($num -1)' */
    }

    echo "<br/> Fatorial de 10 é: <br/>".fat(10);
    echo "<br/> Fatorial de 6 é: <br/>".fat(6);
    echo "<br/> Fatorial de 4 é: <br/>".fat(4);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções recursivas</title>
</head>
<body>
    
</body>
</html>

