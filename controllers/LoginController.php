<?php
/**
 * Created by PhpStorm.
 * User: VictorEstrada
 * Date: 22/10/2017
 * Time: 10:34 AM
 */

class LoginController extends BaseController
{
    function Index(){
        return $this->view(true);
    }

    function Index_POST($username,$password){
        $user_session = new Session();
        $session = $user_session->login($username,$password);
        if(empty($session)){
            $this->errorMsg = "Usuario y/o contraseña incorrecta!!!";
            return $this->view(true);
        }else{
            $_SESSION['ok'] = true;
            foreach ($session as $row){
                $_SESSION['pkUsuario'] = $row['pkUsuario'];
                $_SESSION['cUsuario'] = $row['cUsuario'];
                $_SESSION['fkRol'] = $row['fkRol'];
                $_SESSION['fkForanea'] = $row['fkForanea'];
            }
            return GoToController::go("Home");
        }
    }

    function Logout(){
        $user_session = new Session();
        $user_session->logout();
        $this->Index();
    }
}