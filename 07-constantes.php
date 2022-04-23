<?php

define("NOME", "Jose Carlos");
define("IDADE", 45);
define("ALTURA", 1.86);
define("CASADO", true);

define("TIMES",['Vasco', 'Galão', 'Palmeiras','Estudiantes']);

echo 'Meu nome é ' .NOME. ' e minha idade é: ' .IDADE. ' tenho altura de:' .ALTURA.'.';
echo "<hr>";
var_dump(TIMES);
//echo TIMES[0];

function exibeNome() {
    echo NOME;
}

exibeNome();