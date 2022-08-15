<?php

    if(isset($_POST["f_nome"])) {       /* verificando se esta chegando um 'post' e se neste post tem o conteúdo 'f_nome' do 'formulario' */
        $vnome = $_POST["f_nome"];          /* pega o valor do 'f_nome' */
        echo "Nome: $vnome</br>";               /* e imprime na tela */
    } else {
        echo "Dados não foram submetidos!";
?>

<!DOCTYPE html>     
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÃO ISSET</title>
</head>
<body>

<br/><br/>
<form name="f_php" method="post" action="funcao isset.php">     <!-- 'funcao isset.php' é o local que será enviado o arquivo 'f_nome' -->
    <label>Nome:</label><br/>
    <input type="text" name="f_nome"><br/>
    <input type="submit" value="Enviar">
</form>

    
</body>
</html>

<?php               /* faz a inserção do ducumento 'html' dentro do else do 'php' que fará a presesentação do formulário só enquanto não tiver dados submetidos */

    }

?>