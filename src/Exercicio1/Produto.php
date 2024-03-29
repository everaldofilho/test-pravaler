<?php

namespace App\Exercicio1;

class Produto
{
    public $nome;
    public $quantidade = 0;
    public $valorUnitario = 0;
    public $valorTotal = 0;
    public $porcentagemDesconto = 0;
    public $valorDesconto = 0;
    public $valorTotalAPagar = 0;

    public function __construct($nome, int $quantidade, float $valorunitario)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorunitario;
        $this->valorTotal = $this->valorUnitario * $this->quantidade;
        $this->verificaDesconto();
        $this->calculaTotais();
    }

    public function verificaDesconto()
    {
        if ($this->quantidade <= 5) {
            $this->porcentagemDesconto = 2;
        }

        if ($this->quantidade > 5 && $this->quantidade <= 20) {
            $this->porcentagemDesconto = 3;
        }

        if ($this->quantidade > 10) {
            $this->porcentagemDesconto = 5;
        }
    }

    public function calculaTotais()
    {
        $this->valorDesconto = ($this->valorTotal * $this->porcentagemDesconto) / 100;
        $this->valorTotalAPagar = $this->valorTotal - $this->valorDesconto;
    }

    public function print()
    {
        echo "Produto: {$this->nome}<br>" . PHP_EOL;
        echo "Quantidade: {$this->quantidade}<br>" . PHP_EOL;
        echo "Valor Unitário: R$ {$this->valorUnitario}<br>" . PHP_EOL;
        echo "Total: R$ {$this->valorTotal}<br>" . PHP_EOL;
        echo "Desconto: R$ {$this->valorDesconto} ({$this->porcentagemDesconto}%)<br>" . PHP_EOL;
        echo "Total a Pagar: R$ {$this->valorTotalAPagar}<br>" . PHP_EOL;
        echo "------------------------------------------<br>" . PHP_EOL . PHP_EOL;
    }
}
