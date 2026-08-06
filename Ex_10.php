<?php

// Exercício 10 - Sistema de Notas

function calcularMedia($notas) {

$maiorNota = max($notas);
$menorNota = min($notas);

$soma = 0;
foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

if ($media >= 7) {
    $situacao = "Aprovado";
} else if ($media >= 5) {
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

return "Maior nota: $maiorNota<br>
Menor nota: $menorNota<br>
Média: $media<br>
Situação: $situacao<br>";
}

$notas = [8, 6, 9, 5, 7];

echo "Notas: " . implode(", ", $notas) . "<br>";
echo calcularMedia($notas);

?>