<?php
    $nome = $_POST['nome'];
    $not_1 = $_POST['1'];
    $not_2 = $_POST['2'];
    $not_3 = $_POST['3'];
    $not_4 = $_POST['4'];

    $media = ($not_1 + $not_2 + $not_3 + $not_4) / 4;

    if($media >= 7) {
        echo $nome. " foi aprovado com media de " .$media;
    } else if($media < 7) {
    ?>

        <h1>refazeer exame</h1>
        <a href="notas.html">Refazer</a>

    <?php
    } else if($media >= 5) {
        echo "Aprovado no exame";
    } else if($media < 5) {
        echo "Reprovado exame";
    }
    ?>