<?php

// Exercício 02 - Espelho Mágico

function inverterContarTexto($texto) {
    echo "A quantidade de caracteres do texto é: " . strlen($texto) . "<br>";
    echo "O texto invertido é: " . strrev($texto) . "<br>";
}

$string = "alemanha";
inverterContarTexto($string);

?>