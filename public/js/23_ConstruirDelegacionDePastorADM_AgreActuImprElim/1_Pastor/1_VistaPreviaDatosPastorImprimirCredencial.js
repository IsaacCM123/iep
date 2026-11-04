const modalDialogVistaPreviaDatosPastorImprimir=document.createElement('dialog') //1. Crear el dialog con JavaScript

modalDialogVistaPreviaDatosPastorImprimir.innerHTML=`
    <h3>Vista Previa Registro Pastor Imprimir Credencial:</h3>
    <form method='GET'action='../js/23_ConstruirDelegacionDePastorADM_AgreActuImprElim/1_Pastor/2_ImprimirEsteCredencialDelPastor.html'>
        <label>Pastor:</label><br>
        <input type='text'name='NOMBRE_PASTOR_GET_IMP'id='nombrePastor'readonly></input><br>
        <input type='text'name='CATEGORIA_PASTOR_GET_IMP'id='categoriaPastor'readonly></input><br>
        <input type='text'name='EXTRA_PASTOR_GET_IMP'id='extraPastor'readonly></input><br>
        <input type='text'name='TELEFONO_PASTOR_GET_IMP'id='telefonoPastor'readonly></input><br>
        <label>Iglesia:</label><br>
        <input type='text'name='NOMBRE_IGLESIA_GET_IMP'id='nombreIglesia'readonly></input><br>
        <input type='text'name='CIUDAD_IGLESIA_GET_IMP'id='ciudadIglesia'readonly></input><br>
        <input type='text'name='PAIS_IGLESIA_GET_IMP'id='paisIglesia'readonly></input><br>
        <label>Hospedador:</label><br>
        <input type='text'name='NOMBRE_HOSPEDADOR_GET_IMP'id='nombreAnfitrion'readonly></input><br>
        <input type='text'name='CELULAR_HOSPEDADOR_GET_IMP'id='celularAnfitrion'readonly></input><br>
        <label>Mesa:</label><br>
        <input type='text'name='ASIGNAR_MESA_PASTOR_GET_IMP'id='mesaAsignada'readonly></input><br>
        <label>Cronograma Gastronómico:</label><br>
        <input type='text'name='HORARIO_DESAYUNO_GET_IMP'id='horarioDesayuno'readonly></input><br>
        <input type='text'name='HORARIO_ALMUERZO_GET_IMP'id='horarioAlmuerzo'readonly></input><br>
        <input type='text'name='HORARIO_DELACENA_GET_IMP'id='horarioDeLaCena'readonly></input><br>
        <small>Está Seguro Que Desea Imprimir Credencial?<br>Esta Acción Es Irreversible.</small><br>
        <input type='button'id="btnCerrarDialog"value='Cancelar'>
        <input type='submit'id="btnGuardarDialog"value='Imprimir'>
    </form>`

document.body.appendChild(modalDialogVistaPreviaDatosPastorImprimir) //2. Agregarlo al documento

document.getElementById('btnIconoAbrirModalDialogCredencialPastorID').addEventListener('click',()=>{
    document.getElementById('nombrePastor').value=document.getElementById('txtNombrePastorArmarDelegacionID').value
    document.getElementById('categoriaPastor').value=document.getElementById('txtCategoriaPastorArmarDelegacionID').value
    document.getElementById('extraPastor').value=document.getElementById('txtExtraPastorArmarDelegacionID').value
    document.getElementById('telefonoPastor').value=document.getElementById('txtTelefonoPastorArmarDelegacionID').value
    document.getElementById('nombreIglesia').value=document.getElementById('txtNombreIglesiaArmarDelegacionID').value
    document.getElementById('ciudadIglesia').value=document.getElementById('txtCiudadIglesiaArmarDelegacionID').value
    document.getElementById('paisIglesia').value=document.getElementById('txtPaisIglesiaArmarDelegacionID').value
    document.getElementById('nombreAnfitrion').value=document.getElementById('txtNombreAnfitrionArmarDelegacionID').value
    document.getElementById('celularAnfitrion').value=document.getElementById('txtCelularAnfitrionArmarDelegacionID').value
    document.getElementById('mesaAsignada').value=document.getElementById('txtMesaAsignadaArmarDelegacionID').value
    document.getElementById('horarioDesayuno').value=document.getElementById('strongHorarioDelDesayunoID').textContent
    document.getElementById('horarioAlmuerzo').value=document.getElementById('strongHorarioDelAlmuerzoID').textContent
    document.getElementById('horarioDeLaCena').value=document.getElementById('strongHorarioDeLaCenaID').textContent
    modalDialogVistaPreviaDatosPastorImprimir.showModal()})

modalDialogVistaPreviaDatosPastorImprimir.querySelector('#btnCerrarDialog').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosPastorImprimir.close()})