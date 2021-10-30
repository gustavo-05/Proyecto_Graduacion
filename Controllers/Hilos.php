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
    }
?>