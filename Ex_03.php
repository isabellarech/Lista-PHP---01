<?php

// Exercício 03 - Cadastro Seguro

function mascararCPF($cpf) {
    $partereal = substr($cpf, -4);
    $CpfMascarado = "***.***.***-" . $partereal;

    echo "CPF mascarado: " . $CpfMascarado . "<br>";
}

$cpf = "123.456.789-00";
mascararCPF($cpf);

?>