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
    }
?>