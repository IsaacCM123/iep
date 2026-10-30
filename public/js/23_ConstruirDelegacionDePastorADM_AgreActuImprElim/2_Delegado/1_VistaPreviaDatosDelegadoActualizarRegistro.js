const modalDialogVistaPreviaDatosDelegadoActualizar = document.createElement('dialog')

modalDialogVistaPreviaDatosDelegadoActualizar.innerHTML = `
    <h3>Actualizar Datos Del Delegado.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxDELEGADO.php'>
        <input type='text'id='idDelegado'name='ID_DELEGADO_POST'readonly><br>
        <input type='text'id='nombreDelegado'name='NOMBRE_DELEGADO_POST'placeholder='NOMBRE DELEGADO..'autocomplete='off'autofocus><br>
        <input type='text'id='cedulaDelegado'name='CEDULA_DELEGADO_POST'placeholder='CEDULA IDENTIDAD..'autocomplete='off'><br>
        <input list='listaOpcionesAsignarMesaAlDelegadoID'id='mesaDelegado'name='MESA_DELEGADO_POST'placeholder='ASIGNAR MESA..'autocomplete='off'><br>
            <datalist id='listaOpcionesAsignarMesaAlDelegadoID'>
                <option value="Mesa-001">MOISÉS</option>
                <option value="Mesa-002">PABLO</option>
                <option value="Mesa-003">ABRAHAM</option>
                <option value="Mesa-004">MATEO</option>
                <option value="Mesa-005">DAVID</option>
                <option value="Mesa-006">PEDRO</option>
                <option value="Mesa-007">SALOMÓN</option>
                <option value="Mesa-008">LUCAS</option>
                <option value="Mesa-009">JOSÉ</option>
                <option value="Mesa-010">JUAN</option>
                <option value="Mesa-011">SAMUEL</option>
                <option value="Mesa-012">SANTIAGO</option>
                <option value="Mesa-013">JACOB</option>
                <option value="Mesa-014">MARCOS</option>
                <option value="Mesa-015">JOSUÉ</option>
                <option value="Mesa-016">ESTEBAN</option>
                <option value="Mesa-017">ELIAS</option>
                <option value="Mesa-018">NOÉ</option>
                <option value="Mesa-019">ISAIAS</option>
                <option value="Mesa-020">JEREMIAS</option>
                <option value="Mesa-021">JOB</option>
                <option value="Mesa-022">DANIEL</option>
                <option value="Mesa-023">EZEQUIEL</option>
                <option value="Mesa-024">HAGEO</option>
                <option value="Mesa-025">ELISEO</option>
                <option value="Mesa-026">ZACARIAS</option>
                <option value="Mesa-027">AARÓN</option>
                <option value="Mesa-028">ANDRÉS</option>
                <option value="Mesa-029">NAHUM</option>
                <option value="Mesa-030">JESÚS</option>
            </datalist><br>
        <small>Está Seguro Que Desea Actualizar Este Registro?<br>Esta Acción Es Irreversible.</small><br>
        <input type='button'id='btnCerrarDelegado'value='Cancelar'>
        <input type='submit'value='Actualizar'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosDelegadoActualizar)

document.getElementById('DescargarAquiLosDatosDelDelegadoTblBody').addEventListener('click',(e)=>{
    // Detectar si se hizo click en el botón (o en el ion-icon dentro de él)
    const celdaIconoActualizarRegistroDelegado=e.target.closest('.btnActualizarEsteRegistroDelegadoCLASS')
    if(!celdaIconoActualizarRegistroDelegado) return

    // Obtener la fila (<tr>) donde está el botón
    const clickFilaActualizar=celdaIconoActualizarRegistroDelegado.closest('tr')

    // Las celdas de esa fila: [0]=nombre, [1]=cédula, [2]=mesa
    const celdas = clickFilaActualizar.querySelectorAll('td')

    document.getElementById('idDelegado').value     = celdas[0].textContent
    document.getElementById('nombreDelegado').value = celdas[1].textContent
    document.getElementById('cedulaDelegado').value = celdas[2].textContent
    document.getElementById('mesaDelegado').value   = celdas[3].textContent

    modalDialogVistaPreviaDatosDelegadoActualizar.showModal()})

modalDialogVistaPreviaDatosDelegadoActualizar.querySelector('#btnCerrarDelegado').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosDelegadoActualizar.close()})