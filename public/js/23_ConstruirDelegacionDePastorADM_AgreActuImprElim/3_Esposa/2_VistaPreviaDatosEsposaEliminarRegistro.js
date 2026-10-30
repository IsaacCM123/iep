const modalDialogVistaPreviaDatosEsposaEliminar=document.createElement('dialog')

modalDialogVistaPreviaDatosEsposaEliminar.innerHTML = `
    <h3>Eliminar Este Registro De La Esposa.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxESPOSA.php'>
        <input type='text'id='idEsposaEliminar'name='ID_ESPOSA_POST'readonly><br>
        <input type='text'id='nombreEsposaEliminar'name='NOMBRE_ESPOSA_POST'readonly><br>
        <input type='text'id='mesaEsposaEliminar'name='MESA_ESPOSA_POST'readonly><br>
        <small>Está Seguro Que Desea Eliminar Este Registro?<br>Esta Acción Es Irreversible.</small><br>
        <input type='button'id='btnCerrarEsposa'value='Cancelar'>
        <input type='submit'value='Eliminar'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosEsposaEliminar)

document.getElementById('btnIconoEliminarEsposaID').addEventListener('click',()=>{
    document.getElementById('idEsposaEliminar').value=document.getElementById('txtIdDeLaEsposaDelPastorID').value
    document.getElementById('nombreEsposaEliminar').value=document.getElementById('txtNombreDeLaEsposaDelPastorID').value
    document.getElementById('mesaEsposaEliminar').value=document.getElementById('txtMesaDeLaEsposaDelPastorID').value
    modalDialogVistaPreviaDatosEsposaEliminar.showModal()})

modalDialogVistaPreviaDatosEsposaEliminar.querySelector('#btnCerrarEsposa').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosEsposaEliminar.close()})