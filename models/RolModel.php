<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:22 PM
 */

class RolModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkRol;
    public $cRol;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}