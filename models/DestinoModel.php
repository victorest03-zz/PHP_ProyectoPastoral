<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:24 PM
 */

class DestinoModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkDestino;
    public $cDestino;
    public $cDireccion;
    public $cReferencia;

    public function __construct($model = null)
    {
        if($model != null){
            $this->pkDestino = $model['pkDestino'];
            $this->cDestino = $model['cDestino'];
            $this->cDireccion = $model['cDireccion'];
            $this->cReferencia = $model['cReferencia'];
        }
    }
}