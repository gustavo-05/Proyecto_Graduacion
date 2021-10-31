<?php
    class ColoresModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        //para la funcion de seleccionar los colores desde la base de datos
        public function selectColores()
        {
            //para recuperar datos de la base de datos
            $sql = "SELECT * FROM color";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>