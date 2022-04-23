<?php

$nome = array("Rodrigao", "Ludmilita", "Ismael", "Tupaninho");

if (in_array("Ludmilita", $nome)):
    echo "Existe no Array";
else:
    echo "Não Existe no Array";
endif;
echo "<hr>";

$soma = array(5,15,32,44,99);
$total =array_sum($soma);
echo $total;
echo "<hr>";


$frase = "Meu nome não é jony";

$array  = explode(" ",$frase);
print_r($array);

echo "<hr>";

$nomes = array("Rodrigao", "Ludmilita", "Ismael", "Tupaninho");

$string = implode(", ", $nomes);

echo $string;