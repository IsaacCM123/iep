const modalDialogVistaPreviaDatosPastorImprimir=document.createElement('dialog') //1. Crear el dialog con JavaScript

modalDialogVistaPreviaDatosPastorImprimir.innerHTML=`
    <h3>Vista Previa Registro Pastor Imprimir Credencial:</h3>
    <form method='POST'action='sacky.php'>
        <label>Pastor:</label><br>
        <input type='text'id='nombrePastor'readonly></input><br>
        <input type='text'id='categoriaPastor'readonly></input><br>
        <input type='text'id='extraPastor'readonly></input><br>
        <input type='text'id='telefonoPastor'readonly></input><br>
        <label>Iglesia:</label><br>
        <input type='text'id='nombreIglesia'readonly></input><br>
        <input type='text'id='ciudadIglesia'readonly></input><br>
        <input type='text'id='paisIglesia'readonly></input><br>
        <label>Hospedador:</label><br>
        <input type='text'id='nombreAnfitrion'readonly></input><br>
        <input type='text'id='celularAnfitrion'readonly></input><br>
        <label>Mesa:</label><br>
        <input type='text'id='mesaAsignada'readonly></input><br>
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
    modalDialogVistaPreviaDatosPastorImprimir.showModal()})

modalDialogVistaPreviaDatosPastorImprimir.querySelector('#btnCerrarDialog').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosPastorImprimir.close()})