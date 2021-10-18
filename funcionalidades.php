<?php

function listarMoto($array){
    
echo "------ LISTA DOS ENTREGADORES ------ " . PHP_EOL;
    foreach ($array as $chave => $motoboy) {
    echo "Id:  $chave  | Nome: " . $motoboy['nome'] . PHP_EOL;
   } echo PHP_EOL;
}

function listarLojas($array){
    echo "------ LISTA DAS LOJAS ------ " . PHP_EOL;
    foreach($array as $chave => $prato){
        echo "Nome da loja: $chave ".PHP_EOL; 
        
        foreach($prato as $chave =>$valores){
            echo "Prato n° $chave - {$valores['nome']} | R$  {$valores['preco']}".PHP_EOL ;
          }
        echo PHP_EOL;
    }
}

function listarPratos($array,$nLoja){
    echo "------ ESCOLHA UM DOS PRATOS ------ " . PHP_EOL;
    foreach($array[$nLoja] as $chave => $prato){
        echo "Prato n° $chave - {$prato['nome']} no preço de R$ {$prato['preco']}".PHP_EOL;
    }
}

function verificarExclusivo($array,$idMoto):bool{
    if(count($array[$idMoto]['atende'])>1){
        return FALSE;
    }else{
        return TRUE;
    };
}