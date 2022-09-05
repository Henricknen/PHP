<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABALHANDO COM ARQUIVOS</title>
</head>
<body>

    <?php
                                                /* a variável '$arquivo' é um ponteiro  */
        //$arquivo = fopen("arquivo.txt", "w");      /* $arquivo = fopen("arquivo.txt", "w"); 'w' abre o arquivo p/ escrita, ponteiro no inicio e zera o conteudo, se não existir ele o cria */

        $arquivo = fopen("arquivo.txt", "a");           /* o parâmetro 'a' abre o arquivo para escrita */
        fwrite($arquivo, "Luis henrique s. f.\r\nDesenvolver Fullstack\r\nrepositório de PHP");         /* escrevendo no arquivo '\r\n' quebra linha */ 

        $arquivo = fopen("arquivo.txt", "r");             /* o parâmetro 'r'abre o arquivo p/ leiitura, ponteiro no inicio */
        $conteudo = fread($arquivo, 100);        /* função 'fread' le o aquivo, '100' é paâmetro que indica a quantidade de bytes que vai ser lida */

        echo $conteudo;

        fclose($arquivo);

    ?>
    
</body>
</html>