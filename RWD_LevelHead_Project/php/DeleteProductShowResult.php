<?php
include_once "IShowResult.php";

class DeleteProductShowResult implements IShowResult {
    public function showResult(){}

    public function showNoThisProduct(){
        echo "您想要删除的产品不存在！";
    }

    public function showDeleteSuccess(){
        echo "产品删除成功!";
    }

}

?>