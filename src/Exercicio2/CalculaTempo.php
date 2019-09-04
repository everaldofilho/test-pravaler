<?php

namespace App\Exercicio2;

class CalculaTempo
{
    public $progresso;
    public $tempoBase;
    public $tempoProgresso = 2;
    public $progressoBase;
    public $progressoPorSegundo = 0;
    public $meta;

    public $tempo = 0;

    public function __construct(int $tempo, float $progressoBase, float $meta)
    {
        $this->meta = $meta;
        $this->tempoBase = $tempo;
        $this->progressoBase = $progressoBase;
        $this->progressoPorSegundo = ($this->progressoBase / $this->tempoBase);
    }

    public function calculaTempo(int $segundos = 1)
    {
        $this->progresso = 100.00;
        $this->tempo = 0;
        while ($this->progresso >= $this->meta) {
            printf("%d segundos = %f%% <br>%s", $this->tempo, $this->progresso, PHP_EOL);
            $this->progresso -= ($this->progressoPorSegundo * $segundos);
            $this->tempo += $segundos;
        }
    }
}
