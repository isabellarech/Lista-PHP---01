<?php

// Exercício 14 - Estatísticas Numéricas

function estatisticasNumericas ($numeros) { 

$soma = array_sum($numeros);
$media = $soma / count($numeros);
$maior = max($numeros);
$menor = min($numeros);

sort($numeros);

$quantidadeNumeros = count($numeros);

if ($quantidadeNumeros % 2 == 0) {
    $meio1 = $numeros[$quantidadeNumeros / 2 - 1];
    $meio2 = $numeros[$quantidadeNumeros / 2];
    $mediana = ($meio1 + $meio2) / 2;
} else {
    $mediana = $numeros[floor($quantidadeNumeros / 2)];
}

$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

$resultado = "Soma: $soma<br>";
$resultado .= "Média: $media<br>";
$resultado .= "Maior número: $maior<br>";
$resultado .= "Menor número: $menor<br>";
$resultado .= "Mediana: $mediana<br>";
$resultado .= "Números pares: $pares<br>";
$resultado .= "Números ímpares: $impares<br>";

return $resultado;
}

$numeros = [12, 7, 9, 15, 3, 8, 10];

echo "Números fornecidos: " . implode(", ", $numeros) . "<br>";
echo estatisticasNumericas($numeros);

?>