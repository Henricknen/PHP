<?php

$dia = date("d");       /* função 'date' retorna o dia corrente */
$mes = date("m");              /* função 'date' retorna o mês */
$ano = date("Y");                   /* função 'date' com 'Y' retorna o ano com quatro digitos */
$meses = Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro",);

echo $dia." de ".$meses[$mes - 1]." de ".$ano;          /* faz a retorno da data atual */


?>