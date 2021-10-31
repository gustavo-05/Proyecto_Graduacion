<?php
    class UsuariosModel extends Mysql
    {
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
    } 
?>