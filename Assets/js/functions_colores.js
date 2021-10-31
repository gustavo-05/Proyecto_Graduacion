var tableColores;

document.addEventListener('DOMContentLoaded', function()
{
    tableColores = $('#tableColores').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Colores/getColores",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idColor" },
            { "data": "color" },
            { "data": "descripción" },
            { "data": "actualizar" },
            { "data": "eliminar" }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 100,
        "order": [[0, "asc"]]
    });
});

//id de datatables
$('#tableColores').DataTable();

function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idColor').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de color";
    document.querySelector('#formColor').reset();

    $('#modalFromColores').modal('show');
}