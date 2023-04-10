<?php require_once __DIR__ . './components/header.php'; ?>

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
<?php require_once __DIR__ . './components/footer.html'; ?>