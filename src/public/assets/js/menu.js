function setMenu() {

	let url = window.location.href;
	let menuItems = document.querySelectorAll('.list-group-item a');

	for (let i = 0; i < menuItems.length; i++) {
		let menuItem = menuItems[i];

		if (menuItem.href === url) {
			menuItem.parentNode.classList.add('active');
			menuItem.setAttribute('href', '#');
		} else {
			menuItem.parentNode.classList.remove('active');
		}
	}

	let urlParams = new URLSearchParams(window.location.search);
	
	if (urlParams.has('inclusao') && urlParams.get('inclusao') === '1') {
		let successMsg = document.createElement('div');
		successMsg.className = 'bg-success pt-2 text-white d-flex justify-content-center';
		successMsg.innerHTML = '<h5>Tarefa inserida com sucesso!</h5>';
		document.body.insertBefore(successMsg, document.body.firstChild);
	}
}
