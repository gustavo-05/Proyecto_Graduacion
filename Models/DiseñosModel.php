<?php
    class DiseñosModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        //para la funcion de seleccionar los colores desde la base de datos
        public function selectDiseños()
        {
            //para recuperar datos de la base de datos
            $sql = "SELECT * FROM diseño";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>