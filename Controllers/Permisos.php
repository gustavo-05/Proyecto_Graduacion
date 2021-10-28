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
                //asignar array
                $arrPermisos = array('insertar' => 0, 'consultar' => 0, 'actualizar' => 0, 'eliminar' => 0);
                $arrPermisoRol = array('idRol' => $idrol);
                //validación
                if(empty($arrPermisosRol))
                {
                    for ($i=0; $i < count($arrModulos) ; $i++)
                    { 

                        $arrModulos[$i]['permisos'] = $arrPermisos;
                    }
                }
                else
                {
                    for ($i=0; $i < count($arrModulos); $i++)
                    {
                        $arrPermisos = array('insertar'     => $arrPermisosRol[$i]['insertar'], 
                                             'consultar'    => $arrPermisosRol[$i]['consultar'], 
                                             'actualizar'   => $arrPermisosRol[$i]['actualizar'], 
                                             'eliminar'     => $arrPermisosRol[$i]['eliminar'] 
                                            );
                        //validacion
                        if($arrModulos[$i]['idModulo'] == $arrPermisosRol[$i]['idModulo'])
                        {
                            $arrModulos[$i]['permisos'] = $arrPermisos;
                        }

                    }
                }
                $arrPermisoRol['modulo'] = $arrModulos;
                //mostrando los datos en el modal
                $html = getModal("modalPermisos",$arrPermisoRol);
                //dep($arrPermisoRol);
                /*dep($arrPermisosRol);*/
            }
            die();
        }
        
    }
?>