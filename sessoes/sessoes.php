<?php

    session_start();        /* iniciando uma sessão */
    $_SESSION['vtexto'] = "superior:";
    $_SESSION['vformacao'] = "Análise e desenvolvimento de sistemas<br/>";        /* criando variável com valor dentro da 'session' */
    $_SESSION['vapagara'] = "Está variável será apagada";
    $_SESSION['vlog'] = "s";

    unset($_SESSION['vapagara']);       /* função 'unset' deleta a variável 'vapagara' */

    echo $_SESSION['vtexto'];
    echo "<br/>" .$_SESSION['vformacao'];        /* apresentando o valor da variável na tela do browser */
    echo "<br/>" .$_SESSION['vapagara'];

    if(isset($_SESSION['vtecnicos'])) {      /* se variável 'vtecnico' existir ira fazer o print do 'echo' na tela */
        echo "Técnicos: <br/>" .$_SESSION['vtecnicos'];
    } else {
        echo "<br/>Variável  'vtecnicos' não foi definida";
    }

    /*session_destroy();      /* destroi a sessão toda */

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSÃO</title>
</head>
<body>

    <br><br>
    <a href="pg1.php" target="_self">Segunda página</a>

</body>
</html>