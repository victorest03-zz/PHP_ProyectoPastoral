<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 06:04 PM
 */

class VisitaModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkVisita;
    public $fkFeligrese;
    public $fkMinistro;
    public $fFechaVisita;
    public $cNombres;
    public $cApellidos;
    public $fkTipoPersona;
    public $cTelefono;
    public $cCelular;
    public $fkDistrito;
    public $cDireccion;
    public $fkDestino;
    public $cRefencia;
    public $cNroHabitacion;
    public $cObservacion;
    public $fkEstadoVisita;
    public $fkSubEstadoVisita;

    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}