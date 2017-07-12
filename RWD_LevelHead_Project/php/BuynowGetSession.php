<?php
include_once "IGetSession.php";

class BuynowGetSession implements IGetSession {
    public function getSession(){}

    public function thebuynowGetSession(){
        if(isset($_SESSION["userName"])){
            return $_SESSION["userName"];
        }else{
            return null;
        }
    }
}

?>