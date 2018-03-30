<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:03 PM
 */

class TipoPersonaModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkTipoPersona;
    public $cTipoPersona;
    public $cAbreviatura;

    public function __construct($model = null)
    {
        if($model != null){
            $this->pkTipoPersona = $model['pkTipoPersona'];
            $this->cTipoPersona = $model['cTipoPersona'];
            $this->cAbreviatura = $model['cAbreviatura'];
        }
    }
}