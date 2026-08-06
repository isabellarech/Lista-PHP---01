<?php

// Exercício 13 - Criptografia Simples

function criptografarMensagem ($texto){

$resultado = "";

for ($i=0; $i < strlen($texto); $i++) {
    $resultado .= chr(ord($texto[$i]) + 3);
}

return $resultado;
}

function descriptografarMensagem ($texto){
    $resultado = "";

    for ($i=0; $i < strlen($texto); $i++) {
        $resultado .= chr(ord($texto[$i]) - 3);
    }

    return $resultado;
}

$mensagem = "O parque está fechado para manutenção.";
$mensagemCriptografada = criptografarMensagem($mensagem);
$mensagemDescriptografada = descriptografarMensagem($mensagemCriptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $mensagemCriptografada . "<br>";
echo "Mensagem descriptografada: " . $mensagemDescriptografada . "<br>";

?>