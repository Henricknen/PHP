<?php

    abstract class CarroBase {
        public $cor;
        public $vel = 0;

        function CarroBase($cr) {
            $this->cor = $cr;
        }

        function status() {
            echo "<br/>";
            echo "Carro: ".$this->cor;
            echo "Veloçidade: ".$this->vel;
            echo "<hr/>";
        }

        function Cor () {
            echo "<br/>Minha cor: ".$this->cor;
            echo "<br/>Metodo original";
        }
    }

    class Carro extends CarroBase {
        function Cor() {
            echo "<br/>Cor: ".$this->cor;
        }
    }

    class Transp extends CarroBase {
        function Cor() {
            echo "<br/>Cor: ".$this->cor;
        }
    }

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