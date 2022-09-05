<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTADOR DE VISITAS</title>
</head>
<body>

    <?php

        $arquivo = fopen("contador.txt","r");     /* abrindo 'trabalhando com arquivos..php' para leitura */
        $cont = fread($arquivo,21);        /* armazenando o vaolr na variável '$cont' e chamando a função de leitura 'fread' */
        $cont++;        /* incrementando o '$cont' */
        $arquivo = fopen("contador.txt","w");       /* modo 'w' abre para escrita, se o arquivo não existir ele o cria */
        fwrite($arquivo,$cont);        /* função 'fwrite' escreve no '$arquivo' o conteúdo de '$cont' */
        fclose($arquivo);

        echo "Quantidade de acessos: $cont<br/>";

    ?>
    
</body>
</html>