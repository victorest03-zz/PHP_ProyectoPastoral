<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:55 PM
 */

class SubEstadoVisita extends AuditoriaModel
{
    //Atributos Principales
    public $pkSubEstadoVisita;
    public $fkEstadoVisita;
    public $cSubEstadoVisita;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}