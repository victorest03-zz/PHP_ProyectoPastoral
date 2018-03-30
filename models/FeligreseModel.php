<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 05:50 PM
 */

class FeligreseModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkFeligrese;
    public $cNombres;
    public $cApellidos;
    public $fkTipoPersona;
    public $cCelular;
    public $cTelefono;
    public $fkDistrito;
    public $fkDestino;
    public $cDireccion;
    public $cNroHabitacion;
    public $cReferencia;
    public $cObservacion;
    public $listadoTipoServicio;
    public $isActive;


    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}