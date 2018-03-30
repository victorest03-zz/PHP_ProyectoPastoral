<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 26/11/2017
 * Time: 06:29 PM
 */

class DistritoDao
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new DbConnection();
    }

    public function Listado(){
        $ls = Array();
        $this->conexion->query = 'CALL SP_DISTRITO_LISTA';
        $rows = $this->conexion->get_query();
        foreach ($rows as $row){
            $ls[] = new DistritoModel($row);
        }

        return $ls;
    }
}