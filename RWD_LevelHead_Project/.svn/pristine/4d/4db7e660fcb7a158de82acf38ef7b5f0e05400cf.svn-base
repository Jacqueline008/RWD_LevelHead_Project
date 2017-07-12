<?php
include_once "IShowResult.php";

class UserOrderInfoShowResult implements IShowResult {
    public function showResult(){}

    public function showNoOrder(){
        echo '{"result":"0"}';
    }

    public function showhasOrder($result){
        echo '{"result":"1",'.$result.'}';
    }
}

?>