<?php

function listarMoto($array){
    foreach ($array as $chave => $motoboy) {
    echo "Id:  $chave  | Nome: " . $motoboy['nome'] . PHP_EOL;
   } echo PHP_EOL;
}

function listarLojas($array){
    foreach($array as $chave => $pedido){
        echo "Nome da loja: $chave ".PHP_EOL; 

        foreach($pedido as $chave =>$valores){
            echo "Prato n° $chave - {$valores['nome']} | R$  {$valores['preco']}".PHP_EOL ;
          }
        echo PHP_EOL;
    }
}