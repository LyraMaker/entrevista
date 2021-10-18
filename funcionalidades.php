<?php

function listarMoto($moto){
    foreach ($moto as $chave => $motoboy) {
    echo "Id: " . $chave . " | Nome: " . $motoboy['nome'] . PHP_EOL;
}
}