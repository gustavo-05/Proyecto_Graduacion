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
            { "data": "ver" },
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

    //nuevo usuario y validacion de campos
    var formUsuario = document.querySelector("#formUsuario");
    formUsuario.onsubmit = function(e)
    {
        e.preventDefault();

        var intIdUsuario = document.querySelector('#idUsuario').value;
        var strUsuario = document.querySelector('#txtUsuario').value;
        var strContraseña = document.querySelector('#txtContraseña').value;
        var intEstado = document.querySelector('#listEstado').value;
        var intIdRol = document.querySelector('#listIdRol').value;
        var intIdPersonal = document.querySelector('#listIdPersonal').value;

        //validación de los campos obligatorios
        if(strUsuario == '' || strContraseña == '' || intEstado == '' || intIdRol =='' || intIdPersonal == '')
        {
            swal("Atención", "Debe llenar los campos obligatorios", "error");
            return false;
        }

        //capturando datos por medio de ajax
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Usuarios/setUsuario';
        var formData = new FormData(formUsuario);
        request.open("POST",ajaxUrl,true);
        request.send(formData);

        request.onreadystatechange = function()
        {
            if (request.readyState == 4 && request.status == 200) 
            {
                var objData = JSON.parse(request.responseText);
                if(objData.estado)
                {
                    //para volver a cargar los datos en los formularios despues de un nuevo ingreso

                    $('#modalFromUsuarios').modal("hide");
                    formUsuario.reset();
                    swal("Usuarios", objData.msg ,"success");
                    tableUsuarios.api().ajax.reload(function()
                    {
                        fntRolesUsuario();
                        fntPersonalUsuario();
                        btnVerUsuario();
                        btnActualizarUsuario();
                    });
                }
                else
                {
                    swal("Error", objData.msg , "error");  
                }
            }
        }
        
    }
}, false);

window.addEventListener('load', function() {
    fntRolesUsuario();
    fntPersonalUsuario();
    btnVerUsuario();
    btnActualizarUsuario();
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

//para extraer lista de personal desde la base de datos 
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

//para ver usuario con el boton ver
function btnVerUsuario()
{
    var btnVerUsuario = document.querySelectorAll(".btnVerUsuario");
    btnVerUsuario.forEach(function(btnVerUsuario)
    {
        btnVerUsuario.addEventListener('click', function()
        {

            //Mostrar datos en la tabla
            var idUsuario = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Usuarios/getUsuarioTabla/'+idUsuario;
            request.open("GET", ajaxUrl, true);
            request.send();

            //para obtener la respuesta a la peticion
            request.onreadystatechange = function()
            {
                if (request.status == 200) 
                {
                    var objData = JSON.parse(request.responseText);

                    //validar los datos a mostrar
                    if (objData.status) 
                    {
                        //para mostrar si esta activo o inactivo
                        var estadoUsuario = objData.data.estado == 1 ? 
                        '<span class="badge badge-success">Activo</span>' : 
                        '<span class="badge badge-danger">Inactivo</span>';
                        //mostrando datos en la tabla
                        document.querySelector("#tablaNombre").innerHTML = objData.data.nombre;
                        document.querySelector("#tablaApellido").innerHTML = objData.data.apellido;
                        document.querySelector("#tablaUsuario").innerHTML = objData.data.usuario;
                        document.querySelector("#tablaDirección").innerHTML = objData.data.dirección;
                        document.querySelector("#tablaTeléfono").innerHTML = objData.data.teléfono;
                        document.querySelector("#tablaRol").innerHTML = objData.data.rol;
                        document.querySelector("#tablaEstado").innerHTML = estadoUsuario;
                        document.querySelector("#tablaFecha").innerHTML = objData.data.fechaRegistro;
                        
                        $('#modalVerUsuario').modal('show');

                    }
                    else
                    {
                        swal("Error", objData.msg , "error");
                    }
                }
            }
          });
    });
}

//para editar usuario con el boton ver
function btnActualizarUsuario()
{
    var btnActualizarUsuario = document.querySelectorAll(".btnActualizarUsuario");
    btnActualizarUsuario.forEach(function(btnActualizarUsuario)
    {
        btnActualizarUsuario.addEventListener('click', function()
        {
            //configurando el modal
            document.querySelector('#tituloModal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerRegistro", "headerActualizar");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnTexto').innerHTML = "Actualizar";

            //Mostrar datos en la tabla
            var idusuario = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Usuarios/getUsuario/'+idusuario;
            request.open("GET", ajaxUrl, true);
            request.send();
            
            //validación
            if (request.status == 200) 
            {
                var objData = JSON.parse(request.responseText);

                //validar los datos a mostrar
                if (objData.status)
                {
                    document.querySelector('#idUsuario').value = objData.data.idUsuario;
                    document.querySelector('#txtUsuario').value =objData.data.Usuario;
                    //document.querySelector('#listEstado').value =objData.data.estado;
                    document.querySelector('#listIdRol').value =objData.data.idRol;
                    document.querySelector('#listIdPersonal').value =objData.data.idPersonal;
                    $('#listIdRol').selectpicker('render');
                    $('#listIdPersonal').selectpicker('render');

                    if(objData.data.estado == 1)
                    {
                        document.querySelector('#listEstado').value = 1;
                    }
                    else
                    {
                        document.querySelector('#listEstado').value = 2;
                    }
                    $('#listEstado').selectpicker('render');

                }
                else
                {
                    swal("Error", objData.msg , "error");
                }
            }  
                

            
            $('#modalFromUsuarios').modal('show');

                
        });
    });
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