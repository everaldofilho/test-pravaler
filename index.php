<?php

require './vendor/autoload.php';

use App\Exercicio2\Calculadora;
use App\Exercicio1\Produto;

/**
 * Exercicio 1
 */
$produtos = [];
$produtos[] = new Produto("Leite", 5, 10);
$produtos[] = new Produto("Nescal", 7, 10);

echo '<h3>Exercicio 1</h3>' . PHP_EOL;
foreach ($produtos as $produto) {
    $produto->print();
}

/**
 * Exercicio 2
 */
$tempo = 30.0;
$tempoPorcentagem = 25.0;
$meta = 0.10;

// Quantos porcento anda em 1 segundo
$porcentagemPorSegundo = Calculadora::divide($tempoPorcentagem, $tempo);
// Quantos porcento preciso atingir
$porcentagemMeta = 100 - $meta;
// Quanto tempo em segundos levo para atinger a porcentagem
$segundos = Calculadora::regraDeTres(1, $porcentagemPorSegundo, $porcentagemMeta);

echo "<h3>Exercício 2</h3>" . PHP_EOL;
echo "Leva {$segundos} segundos para perde {$porcentagemMeta}% do matérial radioativa";
