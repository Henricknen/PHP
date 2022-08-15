<?php

    session_start();        /* iniciando uma sessão */
    
    echo "<h3>terçeira Página<h3/>";
    echo "Técnicos: <br/>" .$_SESSION['vtecnicos'];        /* apresentando o valor da variável na tela do browser */
    echo "<br/>" .$_SESSION['vapagara'];
    echo "<br/>" .$_SESSION['Vlinkedin'];

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEGUNDA PÁGINA</title>
</head>
<body>

    <br><br>
    <a href="sessoes.php" target="_self">Voltar</a>
    <a href="pg1.php" target="_self">Segunda página</a>
    
</body>
</html>