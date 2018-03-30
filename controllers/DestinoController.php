<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 06:11 PM
 */

class DestinoController extends BaseController
{
    private $dao;

    public function __construct()
    {
        $this->dao = new DestinoDao();
    }

    function Index(){
        return $this->view();
    }

    function Index_POST($op, $pkDestino, $cDestino = null, $cDireccion = null, $cReferencia = null){
        $model = new DestinoModel();
        $model->pkDestino = $pkDestino;
        $model->cDireccion = $cDireccion;
        $model->cDestino = $cDestino;
        $model->cReferencia = $cReferencia;
        if($op == 1) $model->fkUsuarioCrea =  $_SESSION['pkUsuario'];
        if($op == 2 || $op == 3) $model->fkUsuarioEdita = $_SESSION['pkUsuario'];

        return $this->json($this->dao->Mantenimiento($op,$model));
    }

    function Listado(){
        return $this->json(Array( 'data' => $this->dao->Listado()));
    }

    function Mantenimiento($id){
        $model = new DestinoModel();
        if($id){
            $model = $this->dao->Buscar($id);
        }

        return $this->partialview("_mant", $model);
    }
}