function editar(id, txtTarefa) {

    let form = document.createElement('form');
    form.action = 'index.php?pag=index&acao=atualizar';
    form.method = 'post';
    form.className = 'row';

    let inputTarefa = document.createElement('input');
    inputTarefa.type = 'text';
    inputTarefa.name = 'tarefa';
    inputTarefa.className = 'col-9 form-control';
    inputTarefa.value = txtTarefa;

    let inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id';
    inputId.value = id;

    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-3 btn btn-info';
    button.innerHTML = 'Atualizar';

    form.appendChild(inputTarefa);
    form.appendChild(inputId);
    form.appendChild(button);

    let tarefa = document.getElementById(`tarefa_${id}`);
    tarefa.innerHTML = '';
    tarefa.insertBefore(form, tarefa[0]);
    
}
