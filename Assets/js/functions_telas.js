


function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idTelas').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de telas";
    document.querySelector('#formTelas').reset();

    $('#modalFromTelas').modal('show');
}