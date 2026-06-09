<?php

declare(strict_types=1);

class GerenciadorTarefas
{
    private array $tarefas = [];

    public function adicionar(
        Tarefa $tarefa
    ): void
    {
        $this->tarefas[] = $tarefa;
    }

    public function listar(): void
    {
        foreach ($this->tarefas as $tarefa)
        {
            echo $tarefa->exibir() . PHP_EOL;
        }
    }
}