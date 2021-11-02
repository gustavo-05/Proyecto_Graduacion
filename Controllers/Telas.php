<?php
    class Telas extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function telas()
        {        
            $data['page_tag'] = "Telas";
            $data['page_title'] = "Telas de <small>Bordados</small>";
            $data['page_name'] = "telas";
            $this->views->getView($this,"telas",$data);
        }

        //metodo para obtener listado de telas
        public function getTelas()
        {
            $arrData = $this->model->selectTelas();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton editar información
                $arrData[$i]['editar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnEditarTela" rl="'.$arrData[$i]['idTelas'].'" title="Editar">Editar</button>
                </div>';

                //boton actualizar cantidad de hilos
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-primary btnActualizarTela" rl="'.$arrData[$i]['idTelas'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarTela" rl="'.$arrData[$i]['idTelas'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>