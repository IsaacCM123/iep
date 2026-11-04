const modalDialogVistaPreviaDatosHijoImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosHijoImprimir.innerHTML=`
    <h3>Vista Previa Para Imprimir Este Registro Hijo.</h3>
    <form method='GET'action='../js/23_ConstruirDelegacionDePastorADM_AgreActuImprElim/4_Hijo/4_ImprimirEsteCredencialDelHijo.html'>
        <label>Hijo:</label><br>
        <input type='text'id='nombreHijoImprimir'name='NOMBRE_HIJO_GET'readonly><br>
        <label>Iglesia:</label><br>
        <input type='text'id='nombreIglesiaHijo'name='NOMBRE_IGLESIA_GET'readonly><br>
        <input type='text'id='ciudadIglesiaHijo'name='CIUDAD_IGLESIA_GET'readonly><br>
        <input type='text'id='paisIglesiaHijo'name='PAIS_IGLESIA_GET'readonly><br>
        <label>Mesa:</label><br>
        <input type='text'id='mesaHijoImprimir'name='MESA_HIJO_GET'readonly><br>
        <label>Cronograma Gastronómico:</label><br>
        <input type='text'id='horarioDesayunoHijo'name='HORARIO_DESAYUNO_HIJO_GET'readonly><br>
        <input type='text'id='horarioAlmuerzoHijo'name='HORARIO_ALMUERZO_HIJO_GET'readonly><br>
        <input type='text'id='horarioDeLaCenaHijo'name='HORARIO_DE_CENA_HIJO_GET'readonly><br>
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

    document.getElementById('nombreIglesiaHijo').value=document.getElementById('txtNombreIglesiaArmarDelegacionID').value
    document.getElementById('ciudadIglesiaHijo').value=document.getElementById('txtCiudadIglesiaArmarDelegacionID').value
    document.getElementById('paisIglesiaHijo').value=document.getElementById('txtPaisIglesiaArmarDelegacionID').value

    document.getElementById('horarioDesayunoHijo').value=document.getElementById('strongHorarioDelDesayunoID').textContent
    document.getElementById('horarioAlmuerzoHijo').value=document.getElementById('strongHorarioDelAlmuerzoID').textContent
    document.getElementById('horarioDeLaCenaHijo').value=document.getElementById('strongHorarioDeLaCenaID').textContent

    modalDialogVistaPreviaDatosHijoImprimir.showModal()})

modalDialogVistaPreviaDatosHijoImprimir.querySelector('#btnCerrarHijoImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosHijoImprimir.close()})