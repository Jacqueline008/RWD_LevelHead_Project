<?php
include_once "IGetSession.php";

class UserOrderInfoGetSession implements IGetSession {
    public function getSession(){}

    public function theuserOrderInfoGetSession(){
        if(isset($_SESSION["userName"])){
            return $_SESSION["userName"];
        }else{
            return null;
        }
    }
}

?>