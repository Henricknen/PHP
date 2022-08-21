<?php

    class nome {        /* classe 'nome' */
        private $var1 = "Luis";     /* 'private' restringe o acesso, so pode ser acessada por dentro desta classe */
        protected $var2 = "Henrique";     /* propriedades */
        protected $var3 = "Silva";
        protected $var4 = "Ferreira";   /* 'protected' não deixar acessar do lado de fora */

        function escreve() {        /* método que escreve o valor destas propriedades na tela */
            echo "<br/>Método da classe 'nome'";
            echo "<br/>".$this->var1;
            echo "<br/>".$this->var2;
            echo "<br/>".$this->var3;
            echo "<br/>".$this->var4;
        }
    }

    class formacao extends nome {       /* 'extends' faz a classe 'nomeCompleto' herda as caracteristicas da classe 'nome' */
        var $superior = "Análise e desenvolvimento de sistemas";
        var $tecnicos = "Informatica para internet / Eletroeletronica";

        function escreve2() {
            echo "<br/>Método da classe 'formacao'";
            echo "<br/>".$this->superior;
            echo "<br/>".$this->tecnicos;
            echo "<hr/>";
            echo "<br/>".$this->var1;
            echo "<br/>".$this->var2;       /* mais isso 'protected' não impede pois está classe herda a classe 'nome' */
            echo "<br/>".$this->var3;
            echo "<br/>".$this->var4;
        }
    }

    $meuNome = new nome();      /* instanciando novo objeto da classe 'nome' */
    $nome = new formacao();

    $meuNome->escreve();
    echo "<hr/>";
    //$nome->escreve();
    echo "<br/>";
    $nome->escreve2();
    echo "<hr/>";
    /*echo "<br/>".$this->var1;
    echo "<br/>".$this->var2;           este comando não funcionarão pois esta definido como 'protected
    echo "<br/>".$this->var3; */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASSES</title>
</head>
<body>
    
</body>
</html>