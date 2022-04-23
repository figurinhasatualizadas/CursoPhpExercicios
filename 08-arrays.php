<?php

$carros = array(1=>"BMW", 2=>"Hilux",3=>"GOL",);
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<hr>";

$motos = array();
$motos[] = "CJ 300";
$motos[] = "Yamaha";
$motos[5] = "Kawasaki";
echo $motos[5];
echo "<hr>";

$clientes = ["Thiago","Fernando","Bolsonaro"];
print_r($clientes);
echo "<br>";

//    COUNT CONTAR ELEMENTOS

$totalClientes = count($clientes);
echo 'O numero de clientes é: '.$totalClientes.'.';
echo "<hr>";

//       FOREACH ATRIBUIR O VALOR DE CADA ELEMENTO DO ARRAY

foreach($clientes as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

/////////////////////////////////
//               Arrays ASSOCIATIVOS

$pessoa = array("nome"=> "Rodrigo", "idade"=>36, "altura"=>2.10);
$pessoa["cidade"] = "Capelinha";

foreach ($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

//    ARRAYS MULTIDIMENSIOANIS

$times = array(
    "cariocas"=> array("campeao"=>"vasco", "vice"=> "flamengo","terceiro"=> "botafogo"),
    "paulistas"=> array("santos","Sao paulo","palmeiras" ),
    "baianos"=> array("bahia","vitoria","sport")
    );
echo $times["paulistas"][1];
echo "<br>";

foreach ($times["cariocas"] as $indice=> $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

print_r($times["cariocas"]);

echo "<hr>";

print_r($times["paulistas"]);

echo "<hr>";

print_r($times["baianos"]);


