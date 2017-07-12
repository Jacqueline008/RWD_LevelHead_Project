<?php
include_once 'IView.php';
include_once 'User.php';

class RegisterView implements IView {

    public function toObject(){
        $registerUser=new User();
        $registerUser->setName($_POST["registeruser"]);
        $registerUser->setPwd($_POST["registerpwd"]);
        $registerUser->setTel($_POST["registertel"]);
        return $registerUser;
    }

}

?>