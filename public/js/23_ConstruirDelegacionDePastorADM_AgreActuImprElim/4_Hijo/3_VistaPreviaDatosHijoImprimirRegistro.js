const modalDialogVistaPreviaDatosHijoImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosHijoImprimir.innerHTML=`
    <h3>Imprimir Este Registro Del Hijo.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxHIJO.php'>
        <input type='text'id='nombreHijoImprimir'name='NOMBRE_HIJO_POST'readonly><br>
        <input type='text'id='mesaHijoImprimir'name='MESA_HIJO_POST'readonly><br>
        <small>Está Seguro Que Desea Imprimir Este Registro?<br>
        <input type='button'id='btnCerrarHijoImp'value='Cancelar'>
        <input type='submit'value='Imprimir'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosHijoImprimir)

document.getElementById('DescargarAquiLosDatosDelHijoTblBody').addEventListener('click',(e)=>{
    const celdaIconoImprimirRegistroHijo=e.target.closest('.btnImprimirEsteRegistroHijoCLASS')
    if(!celdaIconoImprimirRegistroHijo) return

    const clickFilaEliminar=celdaIconoImprimirRegistroHijo.closest('tr')

    const celdas=clickFilaEliminar.querySelectorAll('td')
    document.getElementById('nombreHijoImprimir').value=celdas[1].textContent
    document.getElementById('mesaHijoImprimir').value=celdas[2].textContent

    modalDialogVistaPreviaDatosHijoImprimir.showModal()})

modalDialogVistaPreviaDatosHijoImprimir.querySelector('#btnCerrarHijoImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosHijoImprimir.close()})