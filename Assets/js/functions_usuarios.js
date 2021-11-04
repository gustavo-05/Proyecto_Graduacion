var tableUsuarios;
 
document.addEventListener('DOMContentLoaded', function() {

    tableUsuarios = $('#tableUsuarios').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Usuarios/getUsuarios",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idUsuario" },
            { "data": "usuario" },
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "rol" },
            { "data": "estado" },
            { "data": "actualizar" },
            { "data": "eliminar" }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 50,
        "order": [
            [0, "asc"]
        ]
    });
});

window.addEventListener('load', function() {
        fntRolesUsuario();
        fntPersonalUsuario();
}, false);

//id de datatables
$('#tableUsuarios').DataTable();

//para extraer lista de roles desde la base de datos 
function fntRolesUsuario()
{
    var ajaxUrl = base_url+'/Roles/getSelectRoles';
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function()
    {
        if(request.readyState == 4 && request.status == 200)
        {
            document.querySelector('#listIdRol').innerHTML = request.responseText;
            document.querySelector('#listIdRol').value = 1;
            $('#listIdRol');
        }
    }
    
}

//para extraer lista de roles desde la base de datos 
function fntPersonalUsuario()
{
    var ajaxUrl = base_url+'/Personal/getSelectPersonal';
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function()
    {
        if(request.readyState == 4 && request.status == 200)
        {
            document.querySelector('#listIdPersonal').innerHTML = request.responseText;
            document.querySelector('#listIdPersonal').value = 1;
            $('#listIdPersonal');
        }
    }
    
}

function openModal() 
{
    //para limpiar el modal
    document.querySelector('#idUsuario').value = "";
    document.querySelector('.modal-header').classList.replace("headerActualizar", "headerRegistro");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnTexto').innerHTML = "Guardar";
    document.querySelector('#tituloModal').innerHTML = "Registro de Usuario";
    document.querySelector('#formUsuario').reset();

    $('#modalFromUsuarios').modal('show');
}