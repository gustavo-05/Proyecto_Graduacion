<?php
    class Hilos extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function hilos()
        {        
            $data['page_tag'] = "Hilos";
            $data['page_title'] = "Hilos de <small>Bordados</small>";
            $data['page_name'] = "hilos";
            $this->views->getView($this,"hilos",$data);
        }

        //metodo para obtener listado de hilos
        public function getHilos()
        {
            $arrData = $this->model->selectHilos();

            //para trabajar el estado activo e inactivo
            for($i=0; $i<count($arrData); $i++)
            {

                //para los botones del crud
                //boton editar información
                $arrData[$i]['editar'] = '<div class="text-center">
                <button class="btn btn-outline-warning btnEditarHilo" rl="'.$arrData[$i]['idHilo'].'" title="Editar">Editar</button>
                </div>';

                //boton actualizar cantidad de hilos
                $arrData[$i]['actualizar'] = '<div class="text-center">
                <button class="btn btn-outline-primary btnActualizarHilo" rl="'.$arrData[$i]['idHilo'].'" title="Actualizar">Actualizar</button>
                </div>';

                //boton eliminar
                $arrData[$i]['eliminar'] = '<div class="text-center">
                <button class="btn btn-outline-danger btnEliminarHilo" rl="'.$arrData[$i]['idHilo'].'" title="Eliminar">Eliminar</button>
                </div>';
            }

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>