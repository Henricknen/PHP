<?php

    $dia = date("d");       /* função 'date' retorna o dia corrente */
    $mes = date("m");              /* função 'date' retorna o mês */
    $ano = date("Y");                   /* função 'date' com 'Y' retorna o ano com quatro digitos */

    $meses = Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro",);

    $hora = date("H");       /* 'h' é no formato de 8 horas 'H' é no formato de 24 horas */
    $minuto = date("i");            /* minuto é a entrada 'i' */
    $segundo = date("s");

    echo $dia." de ".$meses[$mes - 1]." de ".$ano."<br/>";          /* faz a retorno da data atual */
    echo $hora.":".$minuto.":".$segundo;        /* retorna a hora */
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de data e hora</title>
</head>
<body>
    
</body>
</html>