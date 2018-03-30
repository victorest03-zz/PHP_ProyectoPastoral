<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 22/10/2017
 * Time: 10:41 AM
 */

abstract class BaseController
{
    private static $view_path = './views/';
    private $model;
    public function view($isTotalPage = false){
        $trace = debug_backtrace();
        $caller = $trace[1];

        require_once(self::$view_path . str_replace('Controller','',get_class($this)) . '/' . str_replace('_POST','',$caller['function']) . '.php');
        if(!$isTotalPage)  require_once(self::$view_path . '/Shared/_layout.php');
    }

    public function partialview($nameview, $model = null){
        header('Content-type: text/html');
        if($model != null) $this->model = $model;
        require_once(self::$view_path . str_replace('Controller','',get_class($this)) . '/' . $nameview . '.php');
    }

    public function json($data){
        header('Content-type: application/json');
        echo json_encode($data);
    }
}