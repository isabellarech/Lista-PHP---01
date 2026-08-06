<?php

// Exercício 06 - Conversor de Temperatura

function converterTemperatura(float $valor, string $origem, string $destino): float {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    $celsius = match ($origem) {
        'C' => $valor,
        'F' => ($valor - 32) * 5 / 9,
        'K' => $valor - 273.15,
        default => throw new InvalidArgumentException("Escala de origem inválida")
    };

    return match ($destino) {
        'C' => $celsius,
        'F' => ($celsius * 9 / 5) + 32,
        'K' => $celsius + 273.15,
        default => throw new InvalidArgumentException("Escala de destino inválida")
    };
}

$valor = 50;
$origem = 'F';
$destino = 'C';

echo converterTemperatura($valor, $origem, $destino);

?>