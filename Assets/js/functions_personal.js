var tablePersonal;

document.addEventListener('DOMContentLoaded', function() {

    tablePersonal = $('#tablePersonal').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Personal/getPersonal",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idPersonal" },
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "dirección" },
            { "data": "teléfono" },
            { "data": "editar" },
            { "data": "eliminar" }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [
            [0, "asc"]
        ]
    });

    
});

//id de datatables
$('#tablePersonal').DataTable();

//funcion para llamar el formulario cuando se presione el botón
function openModal() {
    $('#modalFromPersonal').modal('show');
}


function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idPersonal').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de personal";
    document.querySelector('#formPersonal').reset();

    $('#modalFromPersonal').modal('show');
}