<?php

    interface CarroPadrao {      /* criação de 'interface' */
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }

    interface CarroGuerra {
        function atiraCanhao();
        function atiraMetralhadora();
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra {      /* implementando interface 'Carro padrao' e a 'CarroGuerra' */
        public $potencia;        /* implementação de métodos */
        public $velMax;
        private $ligado = false;

        function liga() {
            $this->ligado = true;
        }

        function desliga() {
            $this->ligado = false;
        }

        function status() {
            
            echo "<br/>Potencia: ".$this->potencia;
            echo "<br/>Velocidade Maxima: ".$this->velMax;
            echo "<br/>";
            if($this->ligado) {
                echo "Este carro está ligado...";
            } else {
                echo "Este carro não está ligado...";
            }
            echo "<br/>";
        }

        function acelera() {}

        function freia() {}

        function atiraCanhao() {}

        function atiraMetralhadora() {}

    }

    class Carro extends CarroBase {         /* classe 'Carro' herda classe abstract 'CarroBase' */
        function Carro($pt, $vm) {      /* criação de novovo 'Carro' com parânmetros de potência '$pt' e veloçidade maxima '$vm' */
            $this->potencia -> $pt;
            $this->velMax -> $vm;

            $this->status();
        }
    }

    $carro1 = new Carro(150,280);      /* intançiando novo objeto 'carro1' */
    $carro1->liga();
    $carro1->status();

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