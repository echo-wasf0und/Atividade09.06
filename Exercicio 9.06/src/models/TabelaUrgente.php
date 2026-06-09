<?php

declare(strict_types=1);

class TarefaUrgente extends Tarefa
{
    public function exibir(): string
    {
        return "[URGENTE] {$this->titulo}";
    }
}