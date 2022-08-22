<?php

    abstract class CarroBase {      /* criando uma classe abstrata(base) com 'abstract' */
        public $potencia;
        public $velMax;     /* propriedades */
        public $portas;
        public $ligado = false;

        function liga() {       /* função que liga o carroigado */
            $this->ligado = true;
        }

        function desliga() {       /* função que desliga o carro */
            $this->ligado = false;
        }

        function status() {
            echo "<hr/>";
            echo "Potencia: ".$this->potencia;
            echo "<br/>Veloçidade máxima: ".$this->velMax;
            echo "<br/>Portas: ".$this->portas;
            echo "<br/>";
            if($this->ligado) {
                echo "Carro ligado";
            } else {
                echo "Carro desligado";                
            }
            echo "<hr/>";
        }
    }

    class Carro extends CarroBase {     /* todos objetos que forem instançiados na classe 'Carro' o 'extends' fará herda as caracteristicas de 'CarroBase'  */
        function Carro($pt, $vm, $po) {
            $this->potencia = $pt;
            $this->velMax = $vm;
            $this->portas = $po;
            $this->status();        /* quando corro for criado será listada o estado deste carro */
        }
    }

    $carro1 = new Carro(150, 280, 4);      /* criando um objeto da classe 'Carro' */
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