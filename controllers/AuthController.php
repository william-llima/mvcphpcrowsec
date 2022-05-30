<?php

class AuthController{ 

    public $is_auth=false;
    public $username;
    public $user_id;

    public function login($username, $password){
        $userModel = new User();
        $result = $userModel->getUserByEmail($username,$password);
        

    }
    public function register($username,$password){
        return 'Tela de login';
    }

    public function checkAuth(){
        return $this->is_auth;
    }

}
?>