<?php
    class Usuarios extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function usuarios()
        {        
            $data['page_tag'] = "Usuarios";
            $data['page_title'] = "Usuario <small>Bordados</small>";
            $data['page_name'] = "usuarios";
            $this->views->getView($this,"usuarios",$data);
        }
    }
?>