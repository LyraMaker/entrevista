<?php
include 'moto.php';
include 'funcionalidades.php';


echo "------ LISTA DOS ENTREGADORES ------ " . PHP_EOL;

$pedido =1;

listarMoto($moto);

do {
    
    $lojaSele = readline('Selecione um dos motoboy, digite o id: ');
    $motoSele = readline('Selecione um dos motoboy, digite o id: ');
    echo "--------------------".PHP_EOL;
    echo "Número do pedido  $pedido|           Entregue por ".$moto[$motoSele]['nome'].PHP_EOL;
    echo "--------------------".PHP_EOL;

    $pedido++;


} while ($pedido <= 10);

