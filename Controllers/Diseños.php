<?php
    class Diseños extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function diseños()
        {        
            $data['page_tag'] = "Diseños";
            $data['page_title'] = "Diseños <small>Bordados</small>";
            $data['page_name'] = "diseños";
            $this->views->getView($this,"diseños",$data);
        }

        //metodo para obtener listado de diseños
        public function getDiseños()
        {
            $arrData = $this->model->selectDiseños();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton actualizar
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnActualizarDiseño" rl="'.$arrData[$i]['idDiseño'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarDiseño" rl="'.$arrData[$i]['idDiseño'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>