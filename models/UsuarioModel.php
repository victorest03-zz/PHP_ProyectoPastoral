<?php
require_once './config/DbConnection.php';
class UsuarioModel extends AuditoriaModel {

    //Atributos Principales
    public $pkUsuario;
    public $cUsuario;
    public $cPassword;
    public $fkRol;
    public $fkForanea;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }

    public function validate_user($cUsuario,$cPassword){
        $this->conexion->query = "SELECT * FROM Usuario WHERE cUsuario = '$cUsuario' AND cPassword = MD5('$cPassword')";
        $rows = $this->conexion->get_query();

        return $rows;
    }
    
    public function read( $pkUsuario = ''){
        $this->conexion->query = $pkUsuario != '' ? "SELECT * FROM Usuario WHERE pkUsuario = $pkUsuario":"SELECT * FROM Usuario";
        $rows = $this->conexion->get_query();

        return $rows;
    }
    
}