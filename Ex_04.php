<?php

// Exercício 04 - Gerador de Senhas

function gerarSenha($n) {
    $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "0123456789";
    $caracteresEspeciais = "!@#$%^&*()_+-=[]{}";

    $todosCaracteres = $maiusculas . $minusculas . $numeros . $caracteresEspeciais;

    $senha = "";
    for ($i = 0; $i < $n; $i++) {
        $senha .= $todosCaracteres[mt_rand(0, strlen($todosCaracteres) - 1)];
}

    return $senha;
}

$n = 7;
echo "Senha gerada: " . gerarSenha($n);

?>