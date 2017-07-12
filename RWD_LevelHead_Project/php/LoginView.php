<?php
include_once "IView.php";
include_once "User.php";

class LoginView implements IView {
    public function toObject(){
        $loginUser=new User();
        $loginUser->setName($_POST["loginuser"]);
        $loginUser->setPwd($_POST["loginpwd"]);
        return $loginUser;
    }
}

?>