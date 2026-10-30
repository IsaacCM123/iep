const modalDialogVistaPreviaDatosEsposaActualizar=document.createElement('dialog')
//modalDialogVistaPreviaDatosEsposaActualizar.id='dialogActualizarEsposa'

modalDialogVistaPreviaDatosEsposaActualizar.innerHTML=`
    <h3>Actualizar Datos De La Esposa.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxESPOSA.php'>
        <input type='text'id='idEsposa'name='ID_ESPOSA_POST'readonly><br>
        <input type='text'id='nombreEsposa'name='NOMBRE_ESPOSA_POST'placeholder='NOMBRE ESPOSA..'autocomplete='off'autofocus><br>
        <input list='listaOpcionesAsignarMesaAlaEsposaID'id='mesaEsposa'name='NOMBRE_MESA_POST'placeholder='ASIGNAR MESA..'autocomplete='off'><br>
            <datalist id='listaOpcionesAsignarMesaAlaEsposaID'>
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
        <input type='button'id='btnCerrarDialog'value='Cancelar'>
        <input type='submit'value='Actualizar'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosEsposaActualizar)

document.getElementById('btnIconoActualizarEsposaID').addEventListener('click',()=>{

    document.getElementById('idEsposa').value=document.getElementById('txtIdDeLaEsposaDelPastorID').value
    document.getElementById('nombreEsposa').value=document.getElementById('txtNombreDeLaEsposaDelPastorID').value
    document.getElementById('mesaEsposa').value=document.getElementById('txtMesaDeLaEsposaDelPastorID').value
    modalDialogVistaPreviaDatosEsposaActualizar.showModal()})

modalDialogVistaPreviaDatosEsposaActualizar.querySelector('#btnCerrarDialog').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosEsposaActualizar.close()})