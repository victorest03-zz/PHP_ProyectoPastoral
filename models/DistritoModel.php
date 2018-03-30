<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 04:32 PM
 */

class DistritoModel extends AuditoriaModel
{
    //Atributos Principales
    public $pkDistrito;
    public $cDistrito;

    public function __construct($model = null)
    {
        if($model != null){
            $this->pkDistrito = $model['pkDistrito'];
            $this->cDistrito = $model['cDistrito'];
        }
    }
}