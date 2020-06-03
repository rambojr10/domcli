
	const op = new FormData();
	op.append("op", "cargar_tabla");
	fetch('./controller/tabla_controller.php', {
		method: 'POST',
		body: op
	})
	.then(response => {
		if (response.ok) {
			return response.text();
		}else {
			throw "No se pueden cargar los datos";
		}
	})
	.then(res => {
		document.getElementById("cuerpo").innerHTML = res;
	});

	// alert(document.getElementById("cuerpo"));