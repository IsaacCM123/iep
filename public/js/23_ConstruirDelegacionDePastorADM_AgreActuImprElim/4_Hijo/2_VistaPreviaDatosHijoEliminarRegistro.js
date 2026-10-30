const modalDialogVistaPreviaDatosHijoEliminar=document.createElement('dialog')

modalDialogVistaPreviaDatosHijoEliminar.innerHTML=`
    <h3>Eliminar Este Registro Del Hijo.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxHIJO.php'>
        <input type='text'id='idHijoEliminar'name='ID_HIJO_POST'readonly><br>
        <input type='text'id='nombreHijoEliminar'name='NOMBRE_HIJO_POST'readonly><br>
        <input type='text'id='mesaHijoEliminar'name='MESA_HIJO_POST'readonly><br>
        <small>Está Seguro Que Desea Eliminar Este Registro?<br>Esta Acción Es Irreversible.</small><br>
        <input type='button'id='btnCerrarHijo'value='Cancelar'>
        <input type='submit'value='Eliminar'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosHijoEliminar)

document.getElementById('DescargarAquiLosDatosDelHijoTblBody').addEventListener('click',(e)=>{
    const celdaIconoEliminarRegistroHijo=e.target.closest('.btnEliminarEsteRegistroHijoCLASS')
    if(!celdaIconoEliminarRegistroHijo) return

    const clickFilaEliminar=celdaIconoEliminarRegistroHijo.closest('tr')

    const celdas=clickFilaEliminar.querySelectorAll('td')
    document.getElementById('idHijoEliminar').value=celdas[0].textContent
    document.getElementById('nombreHijoEliminar').value=celdas[1].textContent
    document.getElementById('mesaHijoEliminar').value=celdas[2].textContent

    modalDialogVistaPreviaDatosHijoEliminar.showModal()})

modalDialogVistaPreviaDatosHijoEliminar.querySelector('#btnCerrarHijo').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosHijoEliminar.close()})