<?php
include_once "IGenerateJSON.php";

class InfoGenerateJSON implements IGenerateJSON {
    public function generateJSON(){}

    public function theinfoGenerateJSON($arr){
        $json=json_encode($arr);
        return $json;
    }
}

?>