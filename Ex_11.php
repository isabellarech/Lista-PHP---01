<?php

// Exercício 11 - Formatador de Relatórios

function formatarTexto($texto) {

$resultado = "Texto com letras maiúsculas: " . strtoupper($texto) . "<br>";
$resultado .= "Texto com letras minúsculas: " . strtolower($texto) . "<br>";
$resultado .= "Texto com a primeira letra de cada palavra em maiúscula: " . ucwords($texto) . "<br>";
$resultado .= "Quantidade de caracteres: " . strlen($texto) . "<br>";

return $resultado;
}

$texto = "Amanhã iremos ao parque para fazer um piquenique com os amigos.";

echo "Texto original: " . $texto . "<br>";
echo formatarTexto($texto);

?>