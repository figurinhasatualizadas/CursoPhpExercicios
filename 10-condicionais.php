<?php

$numero = 50;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "É menor";
else:
    echo "não e igual";
endif;
echo "<hr>";

$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";
echo "<hr>";

$cor = "preto";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida de corno é vermelho
        ";
        break;
    case "verde":
        echo "Sua cor preferida de corno é verde
        ";
        break;
    case "azul":
        echo "Sua cor preferida de corno é azul
        ";
        break;
    default:
        echo "Sua cor de corno é OUTRA";
    endswitch;



