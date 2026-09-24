<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<input type="text" name="nombrePOST" id="nombreID" placeholder="Nombre...">
	<table>
		<thead>
			<tr><th>Nombre Completo</th></tr>
		</thead>
		<tbody id="cuerpoTBL"></tbody>
	</table>

	<script>
		const datoFormateado = new FormData()
		datoFormateado.append('ClaveNombrePost_QueryPHP',document.getElementById('nombreID').value)

		fetch('../../admin/query/7_GestionarListaPastor_PHP.php',{method:'POST',body:datoFormateado})
		.then(response=>response.json())
		.then(valoresDePHP=>{
			document.getElementById('cuerpoTBL').innerHTML = valoresDePHP
		})
	</script>
</body>
</html>