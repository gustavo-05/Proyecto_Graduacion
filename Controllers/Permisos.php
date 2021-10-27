<?php
    class Permisos extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getPermisosRol(int $idrol)
        {
            $idrol = intval($idrol);
            if($idrol > 0)
            {
                $arrModulos = $this->model->selectModulos();
                $arrPermisosRol = $this->model->selectPermisosRol($idrol);

                dep($arrModulos);
                dep($arrPermisosRol);
            }
        }
        
    }
?>