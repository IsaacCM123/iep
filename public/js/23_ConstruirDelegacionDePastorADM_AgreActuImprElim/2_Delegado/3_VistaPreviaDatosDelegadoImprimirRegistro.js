const modalDialogVistaPreviaDatosDelegadoImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosDelegadoImprimir.innerHTML=`
    <h3>Imprimir Este Registro Del Delegado.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxDELEGADO.php'>
        <input type='text'id='nombreDelegadoImprimir'name='NOMBRE_DELEGADO_POST'readonly><br>
        <input type='text'id='cedulaDelegadoImprimir'name='CEDULA_DELEGADO_POST'readonly><br>
        <input type='text'id='mesaDelegadoImprimir'name='MESA_DELEGADO_POST'readonly><br>
        <small>Está Seguro Que Desea Imprimir Este Registro?<br>
        <input type='button'id='btnCerrarDelegadoImp'value='Cancelar'>
        <input type='submit'value='Imprimir'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosDelegadoImprimir)

document.getElementById('DescargarAquiLosDatosDelDelegadoTblBody').addEventListener('click',(e)=>{
    const celdaIconoEliminarRegistroDelegado=e.target.closest('.btnImprimirEsteRegistroDelegadoCLASS')
    if(!celdaIconoEliminarRegistroDelegado) return

    const clickFilaEliminar=celdaIconoEliminarRegistroDelegado.closest('tr')

    const celdas=clickFilaEliminar.querySelectorAll('td')

    document.getElementById('nombreDelegadoImprimir').value=celdas[1].textContent
    document.getElementById('cedulaDelegadoImprimir').value=celdas[2].textContent
    document.getElementById('mesaDelegadoImprimir').value=celdas[3].textContent

    modalDialogVistaPreviaDatosDelegadoImprimir.showModal()})

modalDialogVistaPreviaDatosDelegadoImprimir.querySelector('#btnCerrarDelegadoImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosDelegadoImprimir.close()})