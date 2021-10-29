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
    }
?>