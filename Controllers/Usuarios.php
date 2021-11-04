<?php
    class Usuarios extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function usuarios()
        {        
            $data['page_tag'] = "Usuarios";
            $data['page_title'] = "Usuario <small>Bordados</small>";
            $data['page_name'] = "usuarios";
            $this->views->getView($this,"usuarios",$data);
        }

        //metodo para obtener listado de roles
        public function getUsuarios()
        {
            $arrData = $this->model->selectUsuarios();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {
                if($arrData[$i]['estado'] == 1)
                {
                    $arrData[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                }
                else
                {
                    $arrData[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                //boton actualizar
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnActualizarUsuario" rl="'.$arrData[$i]['idUsuario'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarUsuario" rl="'.$arrData[$i]['idUsuario'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }

        //un usuario
        public function setUsuario()
        {
            if ($_POST)
            {
                if(empty($_POST['txtUsuario']) || empty($_POST['txtContraseña']) || empty($_POST['listEstado']) || empty($_POST['listIdRol']) || empty($_POST['listIdPersonal']))
                {
                    $arrResponsive = array("status" => false, "msg" => 'Datos incorrectos');
                }
                else
                {
                    $intIdUsuario = strClean($_POST['idUsuario']);
                    $strUsuario = strClean($_POST['txtUsuario']);
                    $strContraseña = strClean($_POST['txtContraseña']);
                    $intEstado = strClean($_POST['listEstado']);
                    $intIdRol = strClean($_POST['listIdRol']);
                    $intIdPersonal = strClean($_POST['listIdPersonal']);

                    $request_usuario = $this->model->insertUsuario($intIdUsuario,
                                                                $strUsuario,
                                                                $strContraseña,
                                                                $intEstado,
                                                                $intIdRol,
                                                                $intIdPersonal);
                    
                    //proceso para almacernar y mostrar mensaje
                    if ($request_usuario > 0) 
                    {
                        $arrResponse = array('estado' => true, 'msg' => 'Datos guardados correctamente');
                    }
                    else if ($request_usuario == 'exist') 
                    {
                        $arrResponse = array('estado' => false, 'msg' => 'Ya existe el usuario');
                    }
                    else
                    {
                        $arrResponse = array('estado' => false, "msg" => 'No se puede almacenar los datos');
                    }
                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }
    }
?>