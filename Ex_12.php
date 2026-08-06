<?php

// Exercício 12 - Catálogo de Produtos

function analisarProdutos ($produtos, $pesquisa){

$maiorPreco = max($produtos);
$menorPreco = min($produtos);
$mediaPreco = array_sum($produtos) / count($produtos);

$produtoMaisCaro = array_search($maiorPreco, $produtos);
$produtoMaisBarato = array_search($menorPreco, $produtos);

$resultado = "Produto mais caro: R$" . $maiorPreco;
$resultado .= "<br>Produto mais barato: R$" . $menorPreco;
$resultado .= "<br>Média de preço: R$" . $mediaPreco;

if(array_key_exists($pesquisa, $produtos)){
    $resultado .= "<br>O produto  " . $pesquisa . " está disponível por R$" . $produtos[$pesquisa];
} else {
    $resultado .= "<br>O produto  " . $pesquisa . " não está disponível.";
}

return $resultado;
}

$produtos = [
    "Arroz" => 5.50,
    "Feijão" => 7.20,
    "Macarrão" => 4.30,
    "Açúcar" => 3.80,
    "Café" => 8.90
];

$pesquisa = "Feijão";

echo "Produtos disponíveis: <br>";
foreach ($produtos as $nome => $preco) {
    echo $nome . " - R$" . $preco . "<br>";
}

echo "Produto informado para pesquisa: " . $pesquisa . "<br>";
echo analisarProdutos($produtos, $pesquisa);

?>