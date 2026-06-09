<?php

declare(strict_types=1);

class Projeto
{
    private array $tarefas = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionarTarefa(
        Tarefa $tarefa
    ): void
    {
        $this->tarefas[] = $tarefa;
    }

    public function listarTarefas(): array
    {
        return $this->tarefas;
    }
}