<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:47 PM
 */

class EstadoVisita extends AuditoriaModel
{
    //Atributos Principales
    public $pkEstadoVisita;
    public $cEstadoVisita;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}