<?php

    $idade = $_POST['ida'];

    if(($idade >= 5) & ($idade <= 7)) {
        echo "Infantil A";
    } else if(($idade >= 8) & ($idade <= 11)) {
        echo "Infantil B";
    } else if(($idade >= 12) & ($idade <= 13)) {
        echo "Juvenil A";
    } else if(($idade >= 14) & ($idade <= 17)) {
        echo "Juvenil B";
    } else if($idade >= 18) {
        echo "Adultos";
    }

?>