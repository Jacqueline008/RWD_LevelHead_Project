<?php
include_once "ISetSession.php";

class LoginSetSession implements ISetSession {
    public function setSession(){}

    //注册两个会话变量 userType userName
    public function theloginSetSession($name){
        if(preg_match("/^\\*/",$name)){
            $_SESSION["userType"]="admin";
        }else{
            $_SESSION["userType"]="normal";
        }
        $_SESSION["userName"]=$name;
    }
}

?>