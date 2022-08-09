<?php

    function perfil() {
        echo "<hr/>Luis Henrique Silva Ferreira<br/>";
        echo "Cidade natal; Martinópolis-SP<hr/>";
    }

    perfil();       /* chamando a função 'perfil' */
    perfil();
    perfil();           /* se pode chamar a função quantas vezes precisar */

    function soma($n1, $n2) {       /* está função soma possui dois parâmetros '$n1' e '$n2' */
        $res = $n1 + $n2;
        echo "<hr/>A soma de $n1 com $n2 é: $res<hr/>";
    }

    soma(8, 9);     /* o numero 8 e o 9 será passado pra função a qual fará a soma */

    function soma2($n1, $n2) {
        $res = $n1 + $n2;
        return $res;        /* depois de ter feito o calculo 'return' faz o valor ser armazenado em '$res' */
    }

    $so = soma2(6, 9);
    echo"<hr/>Resultado: $so<hr/>";

    $valores = array(5, 2, 9, 3, 7, 1);
    function media($val) {
        $tam = count($val);
        $soma = 0;
        for($i = 0; $i < $tam; $i++) {       /* função que receberá o array '$valores' para poder fazer a média */
            $soma += $val[$i];          /* soma todos os valores de '$i' */
        }
        return $soma / $tam;        /* executa a média */
    }

    $med = media($valores);
    echo "<hr/>A média é igual à: $med<br/>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÕES</title>
</head>
<body>
    
</body>
</html>