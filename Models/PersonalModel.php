<?php
    class PersonalModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        //para la funcion de seleccionar el personal desde la base de datos
        public function selectPersonal()
        {
            //para recuperar datos de la base de datos
            $sql = "SELECT * FROM personal";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>