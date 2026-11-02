const modalDialogVistaPreviaDatosEsposaImprimir=document.createElement('dialog')

modalDialogVistaPreviaDatosEsposaImprimir.innerHTML=`
    <h3>Imprimir Este Registro De La Esposa.</h3>
    <form method='POST'action='xxxxxxxxxxxxxxxxxxxxxxxxxESPOSA.php'>
        <input type='text'id='nombreEsposaImprimir'name='NOMBRE_ESPOSA_POST'readonly><br>
        <input type='text'id='mesaEsposaImprimir'name='MESA_ESPOSA_POST'readonly><br>
        <small>Está Seguro Que Desea Imprimir Este Registro?<br>
        <input type='button'id='btnCerrarEsposaImp'value='Cancelar'>
        <input type='submit'value='Imprimir'>
    </form>`
document.body.appendChild(modalDialogVistaPreviaDatosEsposaImprimir)

document.getElementById('btnIconoImprimirEsposaID').addEventListener('click',()=>{
    document.getElementById('nombreEsposaImprimir').value=document.getElementById('txtNombreDeLaEsposaDelPastorID').value
    document.getElementById('mesaEsposaImprimir').value=document.getElementById('txtMesaDeLaEsposaDelPastorID').value
    modalDialogVistaPreviaDatosEsposaImprimir.showModal()})

modalDialogVistaPreviaDatosEsposaImprimir.querySelector('#btnCerrarEsposaImp').addEventListener('click',()=>{
    modalDialogVistaPreviaDatosEsposaImprimir.close()})