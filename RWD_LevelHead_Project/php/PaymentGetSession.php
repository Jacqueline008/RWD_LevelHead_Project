<?php
include_once "IGetSession.php";

class PaymentGetSession implements IGetSession {
    public function getSession(){}

    public function thepaymentGetSession(){
        if(isset($_SESSION["userName"])){
            return $_SESSION["userName"];
        }else{
            return null;
        }
    }
}

?>