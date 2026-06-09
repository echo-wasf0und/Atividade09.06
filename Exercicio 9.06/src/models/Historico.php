<?php

declare(strict_types=1);

class Historico
{
    private array $registros = [];

    public function adicionar(string $evento): void
    {
        $this->registros[] = $evento;
    }

    public function listar(): array
    {
        return $this->registros;
    }
}