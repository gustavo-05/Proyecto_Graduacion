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
    }
?>