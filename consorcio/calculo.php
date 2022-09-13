<?php

    $prest_tot = $_POST['tot'];
    $prest_pag = $_POST['pag'];
    $val_prest = $_POST['val'];

    $saldo_devedor = ($prest_tot * $val_prest) -  ($prest_pag * $val_prest);
    $prest_s = $saldo_devedor / $val_prest;

    echo "Ainda resta ".$saldo_devedor. " para ser pago";
    echo "<br>Ainda falta ".$prest_s. " prestações a pagar";

?>