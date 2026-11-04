const modalDialogVistaPreviaDatosEsposaImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosEsposaImprimir.innerHTML=`
    <h3>Vista Previa Para Imprimir Este Registro De La Esposa.</h3>
    <form method='GET'action='../js/23_ConstruirDelegacionDePastorADM_AgreActuImprElim/3_Esposa/4_ImprimirEsteCredencialDeLaEsposa.html'>
        <label>Esposa:</label><br>
        <input type='text'id='nombreEsposaImprimir'name='NOMBRE_ESPOSA_GET'readonly><br>
        <label>Iglesia:</label><br>
        <input type='text'id='nombreIglesiaEsposa'name='NOMBRE_IGLESIA_GET'readonly><br>
        <input type='text'id='ciudadIglesiaEsposa'name='CIUDAD_IGLESIA_GET'readonly><br>
        <input type='text'id='paisIglesiaEsposa'name='PAIS_IGLESIA_GET'readonly><br>
        <label>Mesa:</label><br>
        <input type='text'id='mesaEsposaImprimir'name='MESA_ESPOSA_GET'readonly><br>
        <label>Cronograma Gastronómico:</label><br>
        <input type='text'id='horarioDesayunoEsposa'name='HORARIO_DESAYUNO_ESPOSA_GET'readonly><br>
        <input type='text'id='horarioAlmuerzoEsposa'name='HORARIO_ALMUERZO_ESPOSA_GET'readonly><br>
        <input type='text'id='horarioDeLaCenaEsposa'name='HORARIO_DE_CENA_ESPOSA_GET'readonly><br>
        <small>Está Seguro Que Desea Imprimir Este Registro?<br>
        <input type='button'id='btnCerrarEsposaImp'value='Cancelar'>
        <input type='submit'value='Imprimir'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosEsposaImprimir)

document.getElementById('btnIconoImprimirEsposaID').addEventListener('click',()=>{
    document.getElementById('nombreEsposaImprimir').value=document.getElementById('txtNombreDeLaEsposaDelPastorID').value
    document.getElementById('mesaEsposaImprimir').value=document.getElementById('txtMesaDeLaEsposaDelPastorID').value

    document.getElementById('nombreIglesiaEsposa').value=document.getElementById('txtNombreIglesiaArmarDelegacionID').value
    document.getElementById('ciudadIglesiaEsposa').value=document.getElementById('txtCiudadIglesiaArmarDelegacionID').value
    document.getElementById('paisIglesiaEsposa').value=document.getElementById('txtPaisIglesiaArmarDelegacionID').value

    document.getElementById('horarioDesayunoEsposa').value=document.getElementById('strongHorarioDelDesayunoID').textContent
    document.getElementById('horarioAlmuerzoEsposa').value=document.getElementById('strongHorarioDelAlmuerzoID').textContent
    document.getElementById('horarioDeLaCenaEsposa').value=document.getElementById('strongHorarioDeLaCenaID').textContent
    modalDialogVistaPreviaDatosEsposaImprimir.showModal()})

modalDialogVistaPreviaDatosEsposaImprimir.querySelector('#btnCerrarEsposaImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosEsposaImprimir.close()})