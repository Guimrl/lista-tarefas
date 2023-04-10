<?php

namespace src\controllers;

require '../model/Tarefa.model.php';
require '../database/Conexao.php';
require '../service/Tarefa.service.php';

use PSpell\Config;
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

    case 'recuperar':
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
        break;

    case 'atualizar':
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        if ($tarefaService->atualizar()) {
            if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
                header('location: index.php');
            } else {
                header('location: todas_tarefas');
            }
        }
        break;

    case 'remover':
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->remover();

        if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
            header('location: index.php');
        } else {
            header('location: todas_tarefas');
        }

        break;

    case 'marcarRealizada':
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);
        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->marcarRealizada();

        if (isset($_GET['pag']) && $_GET['pag'] == 'index') {
            header('location: index.php');
        } else {
            header('location: todas_tarefas');
        }
        break;
}
