<?php

declare(strict_types=1);

abstract class Tarefa implements Exibivel
{
    private Historico $historico;

    public function __construct(
        protected string $titulo,
        protected Usuario $responsavel
    ) {
        $this->historico = new Historico();

        $this->historico->adicionar(
            "Tarefa criada."
        );
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getResponsavel(): Usuario
    {
        return $this->responsavel;
    }

    public function getHistorico(): Historico
    {
        return $this->historico;
    }

    abstract public function exibir(): string;
}