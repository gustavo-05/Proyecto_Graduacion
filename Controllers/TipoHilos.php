<?php
    class TipoHilos extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function tipoHilos()
        {        
            $data['page_tag'] = "Tipo de hilos";
            $data['page_title'] = "Tipo de hilos para <small>Bordados</small>";
            $data['page_name'] = "tipoHilos";
            $this->views->getView($this,"tipoHilos",$data);
        }

        //metodo para obtener listado de Tipo de hilos
        public function getTipoHilos()
        {
            $arrData = $this->model->selectTipoHilos();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton actualizar
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnActualizarTipoHilo" rl="'.$arrData[$i]['idTipoHilos'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarTipoHilo" rl="'.$arrData[$i]['idTipoHilos'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>