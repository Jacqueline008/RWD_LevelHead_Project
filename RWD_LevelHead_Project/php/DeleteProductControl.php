<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "DeleteProductSelect.php";
include_once "DeleteProductShowResult.php";
include_once "DeleteProductDelete.php";
include_once "CloseDB.php";

class DeleteProductControl implements IController {
    public function control(){}

    public function thedeleteProductControl(){
        //连接数据库
        $conn=ConnectDB::connecttheDB();

        //获取管理员想要删除的产品的id
        $deleteProductID=$_POST["deleteProductID"];

        //在product表中查询是否有该产品
        $deleteProductSelect=new DeleteProductSelect();
        $selectResult=$deleteProductSelect->thedeleteProductSelect($conn,$deleteProductID);


        if($selectResult==0){
            //说明管理员输入的产品id在product表中没有
            $deleteProductShowResult=new DeleteProductShowResult();
            $deleteProductShowResult->showNoThisProduct();
        }else{
            //说明管理员输入的产品id在product表中存在
            $deleteProductDelete=new DeleteProductDelete();
            $deleteProductDelete->thedeleteProductDelete($conn,$deleteProductID);
            $deleteProductShowResult=new DeleteProductShowResult();
            $deleteProductShowResult->showDeleteSuccess();
        }
        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }

}

?>