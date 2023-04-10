<?php

namespace src\controllers;

require '../model/Tarefa.model.php';
require '../database/Conexao.php';
require '../service/Tarefa.service.php';

use src\database\Conexao;
use src\model\Tarefa;
use src\service\TarefaService;

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

switch ($acao) {

    case 'recuperarTarefasPendentes':
        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperarTarefasPendentes();
        break;

    case 'inserir':
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

        header('Location: nova_tarefa.php?inclusao=1');
        break;
}
