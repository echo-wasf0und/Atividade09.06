<?php

declare(strict_types=1);

require_once 'src/Interfaces/Exibivel.php';

require_once 'src/Models/Usuario.php';
require_once 'src/Models/Historico.php';
require_once 'src/Models/Tarefa.php';
require_once 'src/Models/TarefaComum.php';
require_once 'src/Models/TarefaUrgente.php';
require_once 'src/Models/Projeto.php';

require_once 'src/Services/GerenciadorTarefas.php';

$usuario = new Usuario("Julia");

$tarefa1 = new TarefaComum(
    "Estudar PHP",
    $usuario
);

$tarefa2 = new TarefaUrgente(
    "Entregar trabalho",
    $usuario
);

$gerenciador = new GerenciadorTarefas();

$gerenciador->adicionar($tarefa1);
$gerenciador->adicionar($tarefa2);

$gerenciador->listar();