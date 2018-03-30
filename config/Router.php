<?php
class Router{
    private $parameters_post = array();
    private $parameters_get = array();
    public function __construct($controller,$action,$id){

        $session_options = array(
            'use_only_cookies' => 1,
            'auto_start' => 1,
            'read_and_close' => true
        );

        if(count($_POST) > 0){
            foreach ($_POST as $key => $value){
                array_push($this->parameters_post, $value);
            }
        }else{
            if($id != ''){
                array_push($_GET,$id);
            }
            foreach ($_GET as $key => $value){
                if($key != 'controller' && $key != 'action')
                    array_push($this->parameters_get, $value);
            }
        }

        if(!isset($_SESSION)) session_start($session_options);
        if(!isset($_SESSION['ok'])) $_SESSION['ok'] = false;

        if(!$_SESSION['ok'] && ($controller != 'Login' || ($controller == 'Login' && $action != 'Index'))){
            header("Location: ./");
        }else if($_SESSION['ok'] && $controller == 'Login' && $action == 'Index'){
            header("Location: ./Home");
        }else{
            GoToController::go($controller,count($this->parameters_post) ? $action."_POST":$action, count($this->parameters_post) > 0 ? $this->parameters_post:$this->parameters_get);
        }
    }

    public function __destruct(){
        //unset($this);
    }
}