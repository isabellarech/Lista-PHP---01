<?php

// Exercício 03 - Cadastro Seguro

function mascararCPF($cpf) {
    $partereal = substr($cpf, -4);
    return "***.***.***-" . $partereal;
}

$cpf = "123.456.789-00";
echo "CPF mascarado: " . mascararCPF($cpf);

?>