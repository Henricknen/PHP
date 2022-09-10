<?php

    $vpag = $_POST["f_pag"];       
    $vprod = $_POST["f_val"];
    $vtroco = $vprod - $vpag;

    echo "Voçê pagou R$:$vpag,00<br/>num produto de R$:$vprod,00<br/> e receberá R$:$vtroco,00 de troco";

?>

