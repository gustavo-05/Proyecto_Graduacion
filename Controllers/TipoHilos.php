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
    }
?>