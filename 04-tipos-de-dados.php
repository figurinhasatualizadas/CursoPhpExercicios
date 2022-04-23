<?php
//Escalares

//   String

$nome = "Ola mundo!";
var_dump($nome);
if (is_string($nome)):
    echo "É uma String";
else:
    echo "Não é uma String";
endif;
echo "<hr>";

// INT

$idade = 10;
var_dump($idade);

if (is_int($idade)):
    echo "É um INT";
else:
    echo "Não é um INT";
endif;
echo "<hr>";


//          FLOAT

$altura = 1.86;
var_dump($altura);

if (is_float($altura)):
    echo "É um FLOAT";
else:
    echo "Não é um FLOAT";
endif;
echo "<hr>";


//       BOLEAN

$admin = true;
var_dump($admin);

if (is_bool($admin)):
    echo "É um Boleano";
else:
    echo "Não é um Boleano";
endif;
echo "<hr>";




// COMPOSTOS



//              ARRAY


$carros = array("Gol Rallye","Corolla","Ferrari BMW", 2012, 2014, 2022, 2018, true,false, 42.989);
var_dump($carros);

if (is_array($carros)):
    echo "É um Array";
else:
    echo "Não é um Array";
endif;
echo "<hr>";



//           OBJETO

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Gabriel");
var_dump($cliente);

if (is_object($cliente)):
    echo "É um Objeto";
else:
    echo "Não é um Objeto";
endif;
echo "<hr>";