<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTINA PHP</title>
</head>
<body>

    <?php

        $arquivo = fopen("visitas.txt", "r");     /* abrindo o arquivo 'visita.txt' e fazendo leitura com o modo 'r' */
        while(!feof($arquivo)) {       /* faz a leitura linha por linha até chegar no fim do arquivo, função 'feof' retorna true quando chega ao final do arquivo */
            echo fgets ($arquivo, 4099);        /* 'fgets' lê a linha */
            echo "<br/>".fgets($arquivo, 100);
            echo "<br/><br/>";    /* quebrando linha abaixo de cada menssagem */
        }

        fclose($arquivo);

    ?>

    <hr>
    <a href="index.html" target="_self">Voltar</a>
    
</body>
</html>