<?php require_once __DIR__ . './components/header.html';?>

<div class="bg-success pt-2 text-white d-flex justify-content-center">
	<h5>Tarefa inserida com sucesso!</h5>
</div>

<div class="container app">
	<div class="row">
		<div class="col-md-3 menu">
			<ul class="list-group">
				<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
				<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
				<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="container pagina">
				<div class="row">
					<div class="col">
						<h4>Nova tarefa</h4>
						<hr />
						<form method="post" action="tarefa_controller.php?acao=inserir">
							<div class="form-group">
								<label>Descrição da tarefa:</label>
								<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
							</div>
							<button class="btn btn-success">Cadastrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once __DIR__ . './components/footer.html';?>