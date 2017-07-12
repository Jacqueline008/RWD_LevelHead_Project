<?php
include_once "IShowResult.php";

class InfoUploadTextShowResult implements IShowResult {
    public function showResult(){}

    public function theinfoUploadTextshowResult(){
        header("Location:http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Logined_NormalUser.html");
    }
}

?>