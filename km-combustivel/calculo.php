<?php

    $km_i = $_POST['km_i'];
    $km_f = $_POST['km_f'];
    $litros = $_POST['lts'];
    $valor_gas = $_POST['prec'];

    $dist = $km_i + $km_f;
    $tot_gas = $litros * $valor_gas;
    $cons = $tot_gas / $dist;

    echo "Distançia percorrida foi ".$dist. " km";
    echo "<br>Valor total gasto foi de " .$tot_gas. " Reais";
    echo "<br>E o total gasto foi de " .$cons. " reais por Km";

?>