<?php
    class UsuariosModel extends Mysql
    {
        //propiedades
        private $intIdUsuario;
        private $strUsuario;
        private $strContraseña;
        private $intEstado;
        private $intIdRol;
        private $intIdPersonal;

        public function __construct()
        {
            parent::__construct();
        }
        
        //para la funcion de seleccionar los usuarios
        public function selectUsuarios()
        {
            //para recuperar datos de usuarios la base de datos
            $sql = "SELECT u.idUsuario, u.usuario, p.nombre, p.apellido, r.rol, u.estado
            FROM usuario AS u
            INNER JOIN personal AS p
            INNER JOIN rol AS r
            ON u.idRol = r.idRol AND u.idPersonal = p.idPersonal";
            $request = $this->select_all($sql);
            return $request;
        }

        //para insertar un nuevo usuario
        public function insertUsuario(string $usuario, string $contraseña, int $estado, int $rol, int $personal)
        {
            $this->strUsuario=$usuario;
            $this->strContraseña=$contraseña;
            $this->intEstado=$estado;
            $this->intIdRol=$rol;
            $this->intIdPersonal=$personal; 
            return 0;

            $sql = "SELECT * FROM usuario WHERE
            usuario = '{$this->strUsuario}' OR idPersonal = '{$this->intIdPersonal}'";
            $request =$this->select_all($sql);
        }
    } 
?>