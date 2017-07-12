<?php
include_once "IClearSession.php";

class LogoutClearSession implements IClearSession {
    public function clearSession(){}

    public function thelogoutClearSession(){
        unset($_SESSION["userName"]);
        unset($_SESSION["userType"]);
    }
}

?>