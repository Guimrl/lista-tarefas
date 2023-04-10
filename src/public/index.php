<?php
$acao = 'recuperarTarefasPendentes';
require 'tarefa_controller.php';
require_once __DIR__ . './components/header.php';
?>

        <div class="col-md-9">
            <div class="container pagina">
                <div class="row">
                    <div class="col">
                        <h4>Tarefas pendentes</h4>
                        <hr />
                        <?php foreach ($tarefas as $indice => $tarefa) { ?>
                            <div class="row mb-3 d-flex align-items-center tarefa">
                                <div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
                                    <?= $tarefa->tarefa ?>
                                </div>
                                <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                    <i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
                                    <i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i>
                                    <i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . './components/footer.html'; ?>