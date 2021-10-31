var tableDiseños;

document.addEventListener('DOMContentLoaded', function()
{
    tableDiseños = $('#tableDiseños').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Diseños/getDiseños",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idDiseño" },
            { "data": "nombre" },
            { "data": "descripción" },
            { "data": "actualizar" },
            { "data": "eliminar" }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 50,
        "order": [[0, "asc"]]
    });
});

//id de datatables
$('#tableDiseños').DataTable();


function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idDiseño').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de diseño";
    document.querySelector('#formDiseño').reset();

    $('#modalFromDiseños').modal('show');
}