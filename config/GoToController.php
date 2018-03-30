<?php

class GoToController
{
    private static $view_path = './controllers/';

    public static function go($c,$a = 'Index', $parameters = []){
        $controller_path = self::$view_path . $c. 'Controller.php';
        if(file_exists($controller_path)){
            require_once($controller_path);
            $controller = ucwords($c) . 'Controller';
            $controller = new $controller;
            if(count($parameters) > 0){
                call_user_func_array( array( $controller, $a ),$parameters);
            }else{
                call_user_func( array( $controller, $a ));
            }
        }else{
            require_once('./views/error404.php');
        }

    }
}