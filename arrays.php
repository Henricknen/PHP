<?php

    $vet = array(7);        /* a variável 'vet' tem 5 posições */
    $vet2 = array("Proprietario"=>"Luis Henrique S. F", "nascido"=>"08/05/1991","cidade"=>"Martinoplois-SP");

    $mat = array(       /* criando uma matriz */
        array("SQL","OK"),
        array("PYTHON","OK"),
        array("HTML","OK"),
        array("ANGULAR","OK"),
        array("LRAVEL","OK")
    );

    echo "Codificação ".$mat[0][0]." - Concluido: ".$mat [0][1]."<br/>";        /* fazendo o print da matriz */
    echo "Codificação ".$mat[1][0]." - Concluido: ".$mat [0][1]."<br/>";
    echo "Codificação ".$mat[2][0]." - Concluido: ".$mat [0][1]."<br/>";
    echo "Codificação ".$mat[3][0]." - Concluido: ".$mat [0][1]."<br/>";
    echo "Codificação ".$mat[4][0]." - Concluido: ".$mat [0][1]."<br/><br/>";

    $vet[0] = "ANGULAR";            /* '[]' indica o indice do array */
    $vet[1] = "HTML";
    $vet[2] = "PHP";
    $vet[3] = "SQL";
    $vet[4] = "PYTHON";
    $vet[5] = 2022;        /* no 'php' não é preciso informa o tipo da variável */
    $vet[6] = $vet2["Proprietario"];        /* adicionando um elemento de '$vet2' em '$vet' */

    echo "Este repositorio é de ".$vet[2]." que foi codificado por $vet[6] no ano de ".$vet[5]."<br/>";      /* buscando posições dentro do array */
    echo "Proprietário: ".$vet2["Proprietario"]." - nascido: ".$vet2["nascido"]." - na cidade de: ".$vet2["cidade"]; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores/ Arrays</title>
</head>
<body>
    
</body>
</html>