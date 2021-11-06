<?php
    class Login extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function login()
        {     
            $data['page_tag'] = "Login - Bordados";
            $data['page_title'] = "Lógin";
            $data['page_name'] = "home";
            $data['page_functions_js'] = "function_login.js";
            
            $this->views->getView($this,"login",$data);
        }
    }
?>