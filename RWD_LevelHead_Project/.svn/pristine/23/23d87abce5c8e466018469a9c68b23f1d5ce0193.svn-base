<?php
include_once "IController.php";
include_once "StartSession.php";
include_once "BuynowGetSession.php";
include_once "BuynowShowResult.php";
include_once "ConnectDB.php";
include_once "BuynowRemainSelect.php";
include_once "BuynowUpdate.php";
include_once "BuynowInsert.php";
include_once "CloseDB.php";

class BuynowControl implements IController {
    public function control(){}

    public function thebuynowControl(){
        //获取产品id和用户想要加入购物车的数量
        $productID=$_POST["productID"];
        $productCount=$_POST["productCount"];

        //获取登录的用户名
        StartSession::starttheSession();
        $buynowGetSession=new BuynowGetSession();
        $userName=$buynowGetSession->thebuynowGetSession();

        //判断用户是否登录,若未登录则会向用户展示应该先登录的提示
        if($userName==null){
            $buynowShowResult=new BuynowShowResult();
            $buynowShowResult->showNoLoginError();
        }else{
            //1.如果该产品的库存为0件，那么显示库存不足
            //2.如果还有库存那么在product表中将该产品减去相应数量，然后在userorder表中加入一条信息

            //获取数据库连接
            $conn=ConnectDB::connecttheDB();

            //获取该产品的库存
            $buynowRemainSelect=new BuynowRemainSelect();
            $remainResult=$buynowRemainSelect->thebuynowRemainSelect($conn,$productID);
            if($remainResult==1){
                //1.说明库存为0,先用户展示库存不足
                $buynowShowResult=new BuynowShowResult();
                $buynowShowResult->showNoRemain();
            }else{
                //2.将product表中相应产品的库存减去相应数量
                $buynowUpdate=new BuynowUpdate();
                $buynowUpdate->thebuynowUpdate($conn,$productID,$productCount);
                //2.将顾客名和产品ID和购买数量加入userorder表中
                $buynowInsert=new BuynowInsert();
                $buynowInsert->thebuynowInsert($conn,$userName,$productID,$productCount);
                //向用户展示购买成功
                $buynowShowResult=new BuynowShowResult();
                $buynowShowResult->showBuySuccess();
            }
            //关闭数据库连接
            CloseDB::closetheDB($conn);
        }
    }
}

?>