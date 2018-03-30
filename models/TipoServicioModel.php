<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:17 PM
 */

class TipoServicioModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkTipoServicio;
    public $cTipoServicio;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}