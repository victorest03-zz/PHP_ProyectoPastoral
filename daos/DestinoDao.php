<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 29/10/2017
 * Time: 07:58 PM
 */

class DestinoDao{
    //Atributos de Conexion
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }

    public function Listado(){
        $ls = Array();
        $this->conexion->query = 'CALL SP_DESTINO_LISTADO';
        $rows = $this->conexion->get_query();
        foreach ($rows as $row){
            $ls[] = new DestinoModel($row);
        }

        return $ls;
    }

    public function Buscar($id){
        $this->conexion->query = "CALL SP_DESTINO_BUSCAR($id)";
        $row = $this->conexion->get_query();
        return new DestinoModel($row[0]);
    }

    public function Mantenimiento($op,$model){
        $result = new ResultModel();
        try{
            $this->conexion->call_sp('SP_DESTINO_MANT', array($op,$model->pkDestino,$model->cDestino,$model->cDireccion,$model->cReferencia,$model->fkUsuarioEdita ?? $model->fkUsuarioCrea));
            $val = $this->conexion->set_query();
            $result->status = $val;
            if(!$val){
                $result->messages = $this->conexion->get_error();
            }
        }catch (Exception $e){
            $result->status = false;
            $result->messages = $e->getMessage();
        }

        return $result;
    }
}