<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTINA PHP</title>
</head>
<body>

    <?php

        $nome = $_POST["f_nome"];       /* recebendo dados do campo 'f_nome' e armazenando na variável 'f_nome' */
        $msg = $_POST["f_msg"];     /* recebendo dados do campo 'f_msg' e armazenando na variável 'f_msg' */
        $conteudo = $msg. "\r\n".$nome."\r\n";        /* juntando '$msg' e '$nome' na variável '$conteúdo' */

        $arquivo = fopen("visitas.txt", "a");        /* 'fopen' abri o arquivo 'visitas,txt' com o modo 'a' que faz a abertura para escrita */
        fwrite($arquivo, $conteudo);        /* fazendo a escrita no arquivo 'visitas.txt' */

        echo "Menssagem gravada: $conteudo";        /* dizendo que a messagem foii gravada com o valor da variável '$conteudo' */

        fclose($arquivo);       /* fechando o arquivo */

    ?>

    <hr>
    <a href="index.html" target="_self">Voltar</a>
    
</body>
</html>