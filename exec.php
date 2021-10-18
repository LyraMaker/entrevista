<?php
include 'moto.php';
include 'lojas.php';
include 'funcionalidades.php';



$pedido =1;

listarMoto($moto);
listarLojas($lojas);


    
    $lojaSele = readline('Selecione uma das lojas, digite o seu nome: ');
    $motoSele = readline('Selecione um dos motoboy, digite o id: ');
    echo "--------------------".PHP_EOL;
    listarPratos($lojas,$lojaSele);
    $pratoSele = readline('Qual prato deseja? ');
    echo "--------------------".PHP_EOL;




