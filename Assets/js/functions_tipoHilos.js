var tableTipoHilos;

document.addEventListener('DOMContentLoaded', function()
{
    tableTipoHilos = $('#tableTipoHilos').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/TipoHilos/getTipoHilos",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idTipoHilos" },
            { "data": "tipo" },
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
$('#tableTipoHilos').DataTable();


function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idTipoHilos').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de nuevo tipo";
    document.querySelector('#formTipoHilo').reset();

    $('#modalFromTipoHilos').modal('show');
}