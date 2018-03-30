<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 05:52 PM
 */

class MinistroModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkMinistro;
    public $cNombres;
    public $cApellidos;
    public $fFechaNacimiento;
    public $cTelefono;
    public $cCelular;
    public $cEmail;
    public $cDireccion;
    public $fkDistrito;
    public $bMovilidad;
    public $listaMinistros;
    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }
}