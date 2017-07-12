<?php
include_once "IGenerateJSON.php";

class HeaderGenerateJSON implements IGenerateJSON {
    public function generateJSON(){}

    public function theheaderGenerateJSON($arr){
        $json=json_encode($arr);
        return $json;
    }
}

?>