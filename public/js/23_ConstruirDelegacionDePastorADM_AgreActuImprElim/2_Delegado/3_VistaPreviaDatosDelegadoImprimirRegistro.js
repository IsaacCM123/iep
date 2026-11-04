const modalDialogVistaPreviaDatosDelegadoImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosDelegadoImprimir.innerHTML=`
    <h3>Vista Previa Para Imprimir Este Registro Delegado.</h3>
    <form method='GET'action='../js/23_ConstruirDelegacionDePastorADM_AgreActuImprElim/2_Delegado/4_ImprimirEsteCredencialDelDelegado.html'>
        <label>Delegado:</label><br>
        <input type='text'id='nombreDelegadoImprimir'name='NOMBRE_DELEGADO_GET'readonly><br>
        <input type='text'id='cedulaDelegadoImprimir'name='CEDULA_DELEGADO_GET'readonly><br>
        <label>Iglesia:</label><br>
        <input type='text'id='nombreIglesiaDelegado'name='NOMBRE_IGLESIA_GET'readonly><br>
        <input type='text'id='ciudadIglesiaDelegado'name='CIUDAD_IGLESIA_GET'readonly><br>
        <input type='text'id='paisIglesiaDelegado'name='PAIS_IGLESIA_GET'readonly><br>
        <label>Mesa:</label><br>
        <input type='text'id='mesaDelegadoImprimir'name='MESA_DELEGADO_GET'readonly><br>
        <label>Cronograma Gastronómico:</label><br>
        <input type='text'id='horarioDesayunoDelegado'name='HORARIO_DESAYUNO_DEL_GET'readonly><br>
        <input type='text'id='horarioAlmuerzoDelegado'name='HORARIO_ALMUERZO_DEL_GET'readonly><br>
        <input type='text'id='horarioDeLaCenaDelegado'name='HORARIO_DE_CENA_DEL_GET'readonly><br>

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

    document.getElementById('nombreIglesiaDelegado').value=document.getElementById('txtNombreIglesiaArmarDelegacionID').value
    document.getElementById('ciudadIglesiaDelegado').value=document.getElementById('txtCiudadIglesiaArmarDelegacionID').value
    document.getElementById('paisIglesiaDelegado').value=document.getElementById('txtPaisIglesiaArmarDelegacionID').value

    document.getElementById('horarioDesayunoDelegado').value=document.getElementById('strongHorarioDelDesayunoID').textContent
    document.getElementById('horarioAlmuerzoDelegado').value=document.getElementById('strongHorarioDelAlmuerzoID').textContent
    document.getElementById('horarioDeLaCenaDelegado').value=document.getElementById('strongHorarioDeLaCenaID').textContent

    modalDialogVistaPreviaDatosDelegadoImprimir.showModal()})

modalDialogVistaPreviaDatosDelegadoImprimir.querySelector('#btnCerrarDelegadoImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosDelegadoImprimir.close()})