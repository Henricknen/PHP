<?php

    session_start();        /* iniciando uma sessão */

    if($_SESSION['vlog'] == "s") {     /* se 'vlog' for igual a 's' o acesso a está página é permitido se for 'n' acesso negado */

        $_SESSION['vlinkedin'] = "www.linkedin.com/in/henricknen";
        $_SESSION['vtecnicos'] = "Informática para internet / Eletroeletrônica";
        echo "<h3>Segunda Página<h3/>";
        echo $_SESSION['vtexto'];
        echo "<br/>" .$_SESSION['vformacao'];        /* apresentando o valor da variável na tela do browser */
        echo "<br/>" .$_SESSION['vapagara'];

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMEIRA PÁGINA</title>
</head>
<body>

    <br><br>
    <a href="sessoes.php" target="_self">Voltar</a>
    <a href="pg2.php" target="_self">Terçeira página</a>

    
</body>
</html>

<?php

    } else {
        echo "Acesso negado!";
    }

?>