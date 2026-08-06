<?php

//Exercício 08 - Organizador de Lista

function ordenarNomes($nomes) {
    $vetor = explode(", ", $nomes);

    foreach ($vetor as $nome) {
        $nome = trim($nome);
    }

    sort($vetor);

    return implode(", ", $vetor);

}

$nomes = "Rafaella, João, Riquelme, Higor, Bernardo";

echo "Nomes desordenados: " . ordenarNomes($nomes);
echo "Nomes ordernados: " . ordenarNomes($nomes) . "<br>";

?>