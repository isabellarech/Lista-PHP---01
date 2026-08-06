<?php

// Exercício 07 - Sistema de Descontos

function calcularDesconto(int $valorOriginal) {
    if ($valorOriginal <= 100) {
        $desconto = 0;
    } else if ($valorOriginal <= 500) {
        $desconto = 10;
    } else if ($valorOriginal <= 1000) {
        $desconto = 20;
    } else {
        $desconto = 30;
    }

    $valorFinal = $valorOriginal * (1 - $desconto / 100);

    echo "Valor original: R$" . $valorOriginal . "<br>";
    echo "Desconto aplicado: " . $desconto . "%" . "<br>";
    echo "Valor final: R$" . $valorFinal . "<br>";
}

$valorOriginal = 500;
calcularDesconto($valorOriginal);

?>