<?php       /* codigo PHP */
                                    /* Variáveis, é uma posição reservada na memória RAM */
    $nome = "Luis";     /* variavel '$nome' contendo um valor de 'string'  */
    $num = 58.5;                 /* o conteúdo das variaveis podem se modificar, ser alterados */
    $num2 = 37.5;       /* não é preciso atribuir o 'tipo' na variavel, basta atribuir um valor que ela se adequa automaticamente  */ 
    $soma = 0;

    echo "Primeiro nome: $nome<br/>";        /* 'echo' comando de escrita */
    $nome = "Henrique";     /* alteração da variavel '$nome' */
    echo "Segundo nome: $nome<br/>";
    $nome = "Silva Ferreira";       /* nova alteração da variavel '$nome' */
    echo "Sobrenome: ".$nome."<br/>";       /* outra forma de fazer o 'print' */
    $soma = 58.5 + 41.5;
    echo "A soma total da variavel soma é: $soma<br/>";

    echo "<hr/>";

                                        /* Constantes, tem o seu valor definido inçialmente e não pode ser alterado */
    define ("nome", "Luis Henrique Silva Ferreira");      /* informa o nome da constante "nome" e o valor "Luis Henrique Silva Ferreira" */ 
    define("ver", PHP_VERSION);     /* 'PHP_VERSION' constante pré definida */
    define("dir", __DIR__);     /* 'DIR' motra so o caminho do arquivo */

    echo "Contante de nome: ".nome."<br/>";        /* 'contantes' não podem ser alteradas */
    echo "Caminho e nome do arquivo: ".__FILE__."<br/>";      /* constante pré-definida 'FILE' indica o caminho e o nome do arquivo */
    echo "Versão do PHP: ".ver."<br/>";
    echo "Diretorio: ".dir."<br/><br/>";        /* 'DIR' mostra so o caminho */
    echo "Versão do SO: ".PHP_OS."<br/><br/>";       /* mostra o Sitema operaçional em que o php esta sendo executado  */
    echo "numero da linha: ".__LINE__."<br/><br/>";

?>

<!DOCTYPE html>      <!-- codigo HTML -->
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">     <!-- 'meta' para trabalhar com caracteres de acentuação -->
        <title>Constantes e variaveis</title>
    </head>
    <body>
        
    </body>
</html>