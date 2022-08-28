<?php

    class Carro {
        public $cor;        /* propriedades */
        public static $vel;

        function Carro ($cr,) {      /* contrutor com o paraâmetro '$cr' para adiçionar a cor na propriedade '$cor' e com '$vl' para adiçionar veloçidade */
            $this->cor = $cr;
            self::$vel = $vl = 0;       /* para acessar a uma propriedade 'static' usa 'self::' no lugar de '$this' */
        }

        function status () {
            echo "<hr/>";
            echo "Cor: ".$this->cor;
            echo "<br/>Veloçidade: ".self::$vel;
            echo "<hr/>";
        }
    }

    $car1 = new Carro("Vermelho",);            /* crição do objeto '$car' desta classe */
    $car2 = new Carro("branco",);            
    $car3 = new Carro("preto",);            

    $car1->status ();
    $car2->status ();
    $car3->status ();

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