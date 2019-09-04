<?php

require './vendor/autoload.php';

use App\Exercicio1\Produto;
use App\Exercicio2\CalculaTempo;

/**
 * Exercicio 1
 */
$produtos = [];
$produtos[] = new Produto("Leite", 5, 10);
$produtos[] = new Produto("Nescal", 7, 10);
$produtos[] = new Produto("Café", 7, 10);

echo '<h1>Exercicio 1</h1>' . PHP_EOL;
foreach ($produtos as $produto) {
    echo "Nome: {$produto->nome}<br>" . PHP_EOL;
    echo "Quantidade: {$produto->quantidade}<br>" . PHP_EOL;
    echo "Valor: {$produto->valorUnitario}<br>" . PHP_EOL;
    echo "Total: {$produto->valorTotal}<br>" . PHP_EOL;
    echo "Desconto: {$produto->valorDesconto} ({$produto->porcentagemDesconto}%)<br>" . PHP_EOL;
    echo "Total a Pagar: {$produto->valorTotalAPagar}<br>" . PHP_EOL;
    echo "------------------------------------------<br>" . PHP_EOL . PHP_EOL;
}


/**
 * Exercicio 2
 */
$tempo = new CalculaTempo(30, 25, 0.10);
echo '<h1>Exercicio 2</h1>' . PHP_EOL;
$tempo->calculaTempo(5);
echo "Leva {$tempo->tempo} segundos para chegar {$tempo->meta}" . PHP_EOL;
