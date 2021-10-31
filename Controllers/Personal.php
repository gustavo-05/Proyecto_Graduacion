<?php
    class Personal extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function personal()
        {        
            $data['page_tag'] = "Personal";
            $data['page_title'] = "Personal <small>Bordados</small>";
            $data['page_name'] = "personal";
            $this->views->getView($this,"personal",$data);
        }

        //metodo para obtener listado de Personal
        public function getPersonal()
        {
            $arrData = $this->model->selectPersonal();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton actualizar
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnActualizarPersonal" rl="'.$arrData[$i]['idPersonal'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarPersonal" rl="'.$arrData[$i]['idPersonal'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>