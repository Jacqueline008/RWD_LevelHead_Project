<?php
include_once "IGetSession.php";

Class HeaderGetSession implements IGetSession {
    public function getSession(){}

    //若会话变量userName设置了，则返回该会话变量的值，否则返回null
    public function getSessionUserName(){
        if(isset($_SESSION["userName"])){
            return $_SESSION["userName"];
        }else{
            return null;
        }
    }

    //若会话变量userType设置了，则返回该会话变量的值，否则返回null
    public function getSessionUserType(){
        if(isset($_SESSION["userType"])){
            return $_SESSION["userType"];
        }else{
            return null;
        }
    }
}

?>