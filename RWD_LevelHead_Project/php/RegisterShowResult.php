<?php
include_once 'IShowResult.php';

class RegisterShowResult implements IShowResult {

    public function showResult(){}

    public function showSuccessResult(){
        header("Location:http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/RegisterSuccess.html");
    }

    public function showErrorResult(){
        header("Location:http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/RegisterError.html");
    }

}

?>