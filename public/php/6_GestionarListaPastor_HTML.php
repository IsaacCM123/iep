<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<style>
  body {
	    font-family: system-ui, sans-serif;
	    padding: 60px;
	    background: #f4f5f7;
	  }

	  button {
	    padding: 10px 18px;
	    background: #2563eb;
	    color: white;
	    border: none;
	    border-radius: 8px;
	    font-size: 15px;
	    cursor: pointer;
	  }
	  button:hover { background: #1d4ed8; }

	  dialog {
	    border: none;
	    border-radius: 12px;
	    padding: 0;
	    width: 90%;
	    max-width: 420px;
	    box-shadow: 0 20px 50px rgba(0,0,0,0.2);
	  }

	  dialog::backdrop {
	    background: rgba(0,0,0,0.5);
	    backdrop-filter: blur(2px);
	  }

	  .dialog-content {
	    padding: 24px;
	  }

	  .dialog-content h2 {
	    margin: 0 0 8px;
	    font-size: 19px;
	    color: #111827;
	  }

	  .dialog-content p {
	    margin: 0 0 20px;
	    color: #4b5563;
	    font-size: 14px;
	  }

	  .dialog-actions {
	    display: flex;
	    justify-content: flex-end;
	    gap: 10px;
	  }

	  .btn-secondary {
	    background: #e5e7eb;
	    color: #111827;
	  }
	  .btn-secondary:hover { background: #d1d5db; }

	  .btn-danger {
	    background: #dc2626;
	  }
	  .btn-danger:hover { background: #b91c1c; }
</style>



<body>
	
	<button id="openBtn">Abrir modal</button>


	<!--Modal para agregar nuevo pastor ....................INICIO-->
	<dialog id="miModal" closedby="any">
	  <div class="dialog-content">
	    <h2>Registro Pastor</h2>
	    <input type="text" name="nombre" placeholder="Dni Pastor..." required><br>
	    <input type="text" name="nombre" placeholder="Nombre Completo..." required><br>


	    <select required>
	    	<option value="" disabled selected>Categoria</option>
	    	<option value="PRESBITERO">PRESBITERO</option>
	    	<option value="DIACONO">DIACONO</option>
	    	<option value="PROBANDO">PROBANDO</option>
	    	<option value="HONORARIO">HONORARIO</option>
	    </select><br>


	    <input placeholder="Extra..." list="Extra">
	    <datalist id="Extra">
	    	<option value="JEFE DE ZONA">Requisito Opcional 1</option>
	    	<option value="SECRETARIO">Requisito Opcional 2</option>
	    	<option value="TESORERO">Requisito Opcional 3</option>
	    	<option value="PRESIDENTE">Requisito Opcional 4</option>
	    	<option value="VOCAL">Requisito Opcional 5</option>
	    </datalist><br>


	    <input type="text" placeholder="Telefono..." name=""><br>

	    
	    <input placeholder="Mesa..." list="Mesa">
	    <datalist id="Mesa">
	    	<option value="Mesa-001">Moises</option>
	    	<option value="Mesa-002">Pablo</option>
	    	<option value="Mesa-003">Abraham</option>
	    	<option value="Mesa-004">Mateo</option>
	    	<option value="Mesa-005">Jeremias</option>
	    </datalist>



	    <p>¿Estás seguro de que deseas continuar? Esta acción no se puede deshacer.</p>
	    <div class="dialog-actions">
	      <button class="btn-secondary" id="cancelBtn">Cancelar</button>
	      <button class="btn-danger" id="confirmBtn">Confirmar ICM</button>
	    </div>
	  </div>
	</dialog>
	<!--Modal para agregar nuevo pastor ....................FINAL-->

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




	<script>
	  const modal = document.getElementById('miModal');
	  const openBtn = document.getElementById('openBtn');
	  const cancelBtn = document.getElementById('cancelBtn');
	  const confirmBtn = document.getElementById('confirmBtn');

	  openBtn.addEventListener('click', () => {
	    modal.showModal(); // abre como modal (bloquea interacción con el fondo)
	  });

	  cancelBtn.addEventListener('click', () => {
	    modal.close();
	  });

	  confirmBtn.addEventListener('click', () => {
	    console.log('Acción confirmada');
	    modal.close();
	  });

	  // Cerrar al hacer clic fuera del modal (en el backdrop)
	  modal.addEventListener('click', (e) => {
	    const rect = modal.getBoundingClientRect();
	    const dentro = e.clientY >= rect.top && e.clientY <= rect.bottom &&
	                    e.clientX >= rect.left && e.clientX <= rect.right;
	    if (!dentro) modal.close();
	  });
	</script>
</body>
</html>