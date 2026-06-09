<?php

declare(strict_types=1);

class TarefaComum extends Tarefa
{
    public function exibir(): string
    {
        return "[COMUM] {$this->titulo}";
    }
}