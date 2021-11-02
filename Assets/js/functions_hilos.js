var tableHilos;

document.addEventListener('DOMContentLoaded', function()
{
    tableHilos = $('#tableHilos').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Hilos/getHilos",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idHilos" },
            { "data": "color" },
            { "data": "código" },
            { "data": "tipo" },
            { "data": "cantidad" },
            { "data": "descripción" },
            { "data": "editar" },
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
$('#tableHilos').DataTable();


function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idHilos').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de hilos";
    document.querySelector('#formHilo').reset();

    $('#modalFromHilos').modal('show');
}