<?php

    class Carro  {       /* criação da classe 'Carro' */
        var $tipo;              /* 1 = Passeio / 2 = Esporte / 3 = Ultilitário */
        var $velMax;      
        var $nome;          /* propriedades */
        var $liga;
        var $vel;
    

        function Carro ($tp, $no) {      /* método construtor da classe com parâmetros de entrada '$tp' e '$no' */
            $this->tipo = $tp;
            $this->liga = false;            /* 'this' se refere a classe 'Carro' */
            $this->nome = $no;
            $this->vel = 0;     /* quando o 'Carro' é criado sua velocidade é igual a 0 */
            if($tp == 1) {
                $this->velMax = 160;
            } else if ($tp == 2) {
                $this->velMax = 300;
            } else {
                $this->velMax = 100;
            }
        }

        function ligar() {          /* método de ligar e desligar o carro */
            $this->liga = true;
        } 

        function desligar() {       /* método de desligar o carro */
            $this->liga = false;
        }

        function velocidade($vl) {     /* método 'velocidade' altera velocidade da variável '$vel' */
            if($vl > $this->velMax) {
                $this->vel=$this->velMax;
            } else {
                $this->vel = $vl;
            }
        }

        function id() {     /* método lista as caracteristicas do Carro */
            echo "<br/>";
            echo "O nome do carro é: ".$this->nome;
            echo "<br/>Tipo do carro: ".$this->tipo;
            echo "<br/>Velocidade Máxima: ".$this->velMax;
            echo "<br/>Velocidade atual: ".$this->vel;
            if($this->liga) {
                echo "<br/>Este carro está LIGADO...";
            } else {
                echo "<br/>Desligado...";
            }
        } 
    }

    $carro1 = new Carro(2, "Ferrari");     /* criando objeto '$carro1' com 'tipo' e 'nome' espeçificado */
    $carro2 = new Carro(3, "Passeio");
    $carro3 = new Carro(1, "Simples");

    $carro1 -> ligar();       /* ligando o carro */
    $carro3 -> ligar();

    $carro2 -> velocidade(250);     /* inserindo 'velocidde' */

    $carro3 -> desligar();      /* desligando 'carro3' */


    $carro1 -> id();       /* chamando o método 'id' para identificar tudo deste carro */
    echo "<hr/>";

    $carro2 -> id();      
    echo "<hr/>";

    $carro3 -> id();      

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