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
            $data['page_title'] = "Personal de <small>Bordados</small>";
            $data['page_name'] = "personal";
            $this->views->getView($this,"personal",$data);
        }

        //metodo para obtener listado de roles
        public function getPersonal()
        {
            $arrData = $this->model->selectPersonal();

            //para convertir el array en formato json
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
?>