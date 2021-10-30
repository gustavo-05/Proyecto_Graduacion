

function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idDiseño').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de diseño";
    document.querySelector('#formDiseños').reset();

    $('#modalFromDiseños').modal('show');
}