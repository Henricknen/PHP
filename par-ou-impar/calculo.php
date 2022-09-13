<?php

$num = $_POST['numero'];

if($num % 2 == 0) {
    echo "O numero digitado é par<br>";
} else {
    echo "O numero digitado é impar<br>";
}
if($num > 0) {
    echo " é positivo<br>";
} else {
    echo " é negativo<br>";
}

?>