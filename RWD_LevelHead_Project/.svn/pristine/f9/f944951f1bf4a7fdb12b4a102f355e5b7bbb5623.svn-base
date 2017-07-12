<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "InsertProductInsert.php";
include_once "CloseDB.php";

class InsertProductControl implements IController {
    public function control(){}

    public function theinsertProductControl($insertProduct){
        //获取一个产品的8个属性
        $ID=$insertProduct->getID();
        $Pic=$insertProduct->getPic();
        $Description=$insertProduct->getDescription();
        $SaleAccount=$insertProduct->getSaleAccount();
        $SellPrice=$insertProduct->getSellPrice();
        $CostPrice=$insertProduct->getCostPrice();
        $RemainAccount=$insertProduct->getRemainAccount();
        $Earing=$insertProduct->getEaring();

        //连接数据库
        $conn=ConnectDB::connecttheDB();

        //将从录入产品表单中检索的数据插入product表中
        $insertProductInsert=new InsertProductInsert();
        $insertProductInsert->theinsertProductInsert($conn,$ID,$Pic,$Description,$SaleAccount,$SellPrice,$CostPrice,$RemainAccount,$Earing);

        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }
}

?>