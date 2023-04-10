<?php

use src\database\Conexao;
use src\model\Tarefa;
use src\service\TarefaService;

require "../model/Tarefa.model.php";
require "../service/Tarefa.service.php";
require "../database/Conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
if($acao == 'inserir' ) {
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('Location: nova_tarefa.php?inclusao=1');
}