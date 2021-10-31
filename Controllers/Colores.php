<?php
    class Colores extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function colores()
        {        
            $data['page_tag'] = "Colores";
            $data['page_title'] = "Colores <small>Bordados</small>";
            $data['page_name'] = "colores";
            $this->views->getView($this,"colores",$data);
        }

        //metodo para obtener listado de colores
        public function getColores()
        {
            $arrData = $this->model->selectColores();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton actualizar
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnActualizarColor" rl="'.$arrData[$i]['idColor'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarColor" rl="'.$arrData[$i]['idColor'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>