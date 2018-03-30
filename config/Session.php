<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 21/10/2017
 * Time: 11:07 PM
 */

class Session
{
    private $session;

    public function __construct()
    {
        $this->session = new UsuarioModel();
    }

    public function login($cEmail,$cPassword){
        return $this->session->validate_user($cEmail,$cPassword);
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: ./');
    }
}