<?php
    class PermisosModel extends Mysql
    {
        //variables
        public $intIdpermiso;
		public $intIdrol;
		public $intIdmodulo;
		public $insertar;
		public $consultar;
		public $actualizar;
		public $eliminar;

        public function __construct()
        {
            parent::__construct();
        }

        //para seleccionar todos sus modulos
        public function selectModulos()
		{
			$sql = "SELECT * FROM modulo WHERE estado != 0";
			$request = $this->select_all($sql);
			return $request;
		}

        //seleccionar tabla permisos
        public function selectPermisosRol(int $idrol)
		{
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM permisos WHERE idRol = $this->intIdrol";
			$request = $this->select_all($sql);
			return $request;
		}
        
    }
?>