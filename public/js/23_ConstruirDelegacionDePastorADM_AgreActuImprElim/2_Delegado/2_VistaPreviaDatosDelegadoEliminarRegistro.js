const modalDialogVistaPreviaDatosDelegadoEliminar = document.createElement('dialog')

modalDialogVistaPreviaDatosDelegadoEliminar.innerHTML = `
    <h3>Eliminar Este Registro Del Delegado.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxDELEGADO.php'>
        <input type='text'id='idDelegadoEliminar'name='ID_DELEGADO_POST'readonly><br>
        <input type='text'id='nombreDelegadoEliminar'name='NOMBRE_DELEGADO_POST'readonly><br>
        <input type='text'id='cedulaDelegadoEliminar'name='CEDULA_DELEGADO_POST'readonly><br>
        <small>Está Seguro Que Desea Eliminar Este Registro?<br>Esta Acción Es Irreversible.</small><br>
        <input type='button'id='btnCerrarDelegado'value='Cancelar'>
        <input type='submit'value='Eliminar'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosDelegadoEliminar)

document.getElementById('DescargarAquiLosDatosDelDelegadoTblBody').addEventListener('click',(e)=>{
    const celdaIconoEliminarRegistroDelegado=e.target.closest('.btnEliminarEsteRegistroDelegadoCLASS')
    if(!celdaIconoEliminarRegistroDelegado) return

    const clickFilaEliminar=celdaIconoEliminarRegistroDelegado.closest('tr')

    const celdas=clickFilaEliminar.querySelectorAll('td')

    document.getElementById('idDelegadoEliminar').value=celdas[0].textContent
    document.getElementById('nombreDelegadoEliminar').value=celdas[1].textContent
    document.getElementById('cedulaDelegadoEliminar').value=celdas[2].textContent

    modalDialogVistaPreviaDatosDelegadoEliminar.showModal()})

modalDialogVistaPreviaDatosDelegadoEliminar.querySelector('#btnCerrarDelegado').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosDelegadoEliminar.close()})