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
    }
?>