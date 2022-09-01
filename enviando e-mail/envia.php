<?php

    $vmail = $_POST['email_txt'];       /* variáveis que recebem dados via 'post' do 'formulario de e-mail.php' */
    $vassunto = $_POST['assunto_txt'] ;
    $vmsg = $_POST['msg_txt'];

    if (mail($vmail, $vassunto, $vmsg)) {       /* função 'meil' dentro de 'if' recebe as informações das variáveis '$vmail, $assunto e $vmsg' */
        echo "Menssagen enviada <br>";
        echo "<a href=formulario de e-mail.php target=_self>Voltar</a>";
    } else {
        echo "Erro menssagem não enviada, tente novamente...";
    }         

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIO DE EMAIL</title>
</head>
<body>
    
</body>
</html>