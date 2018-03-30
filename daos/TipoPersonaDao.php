<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 26/11/2017
 * Time: 06:36 PM
 */

class TipoPersonaDao
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }

    public function Listado(){
        $ls = Array();
        $this->conexion->query = 'CALL SP_TIPOPERSONA_LISTA';
        $rows = $this->conexion->get_query();
        foreach ($rows as $row){
            $ls[] = new TipoPersonaModel($row);
        }

        return $ls;
    }
}