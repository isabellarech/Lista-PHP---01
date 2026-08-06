<?php

// Exercício 09 - Sistema de Notas

function analisarNumeros($numero) {
    if ($numero % 2 == 0) {
        $parImpar = "par";
    } else {
        $parImpar = "ímpar";
    }

    $primo = "Primo";

    if ($numero < 2) {
        $primo = "Não é primo";
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        $soma += $i;
    }

    if ($soma == $numero) {
        $perfeito = "É perfeito";
    } else {
        $perfeito = "Não é perfeito";
    }

    return "Número: $numero<br>
    Par ou ímpar: $parImpar<br>
    Primo: $primo<br>
    Perfeito: $perfeito<br>";
}

$numero = 32;

echo analisarNumeros($numero);

?>