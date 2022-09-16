<?php

    $num = [2,4,23,22,20,44,48,46,39,45,21,49,5,7,8,11,12,25,9,10,37,38,36,30,29,42,40,1,3,14,15,
19,18,17,16,28,27,26,24,50,43,47,41,35,33,32,31,34,6,13];

    asort($num, SORT_NUMERIC);
    foreach ($num as $num) {
        echo $num. "<br>";
    }
    echo "<br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem crescente</title>
</head>
<body>
    
</body>
</html>