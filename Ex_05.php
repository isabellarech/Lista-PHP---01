<?php

// Exercício 05 - Estatísticas de Texto

function analisarTexto($texto) {
    $quantidadePalavras = str_word_count($texto);
    $quantidadeCaracteres = strlen(str_replace(' ', '', $texto));
    $quantidadeVogais = preg_match_all('/[aeiouAEIOU]/', $texto);
    $quantidadeConsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    echo "Quantidade de palavras: " . $quantidadePalavras . "<br>";
    echo "Quantidade de caracteres: " . $quantidadeCaracteres . "<br>";
    echo "Quantidade de vogais: " . $quantidadeVogais . "<br>";
    echo "Quantidade de consoantes: " . $quantidadeConsoantes . "<br>";
}

$texto = "Hoje de manhã, fui ao supermercado e comprei frutas, legumes e pão.";
analisarTexto($texto);

?>