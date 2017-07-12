<?php
include_once "IController.php";
include_once "StartSession.php";
include_once "ShowShoppingCarGetSession.php";
include_once "ConnectDB.php";
include_once "ShowShoppingCarSelect.php";
include_once "ShowShoppingCarShowResult.php";
include_once "ShowShoppingCarInfoSelect.php";
include_once "CloseDB.php";

class ShowShoppingCarControl implements IController {
    public function control(){}

    public function theshowShoppingCarControl(){

        //获取登录的用户名
        StartSession::starttheSession();
        $showShoppingCarGetSession=new ShowShoppingCarGetSession();
        $userName=$showShoppingCarGetSession->theshowShoppingCarGetSession();

        //获取数据库连接
        $conn=ConnectDB::connecttheDB();

        //查询该用户在shoppingcar表中是否有信息
        $showShoppingCarSelect=new ShowShoppingCarSelect();
        $flag=$showShoppingCarSelect->theshowShoppingCarSelect($conn,$userName);
        if($flag==0){
            //说明用户的购物车是空的,显示空购物车对应的消息
            $showShoppingCarShowResult=new ShowShoppingCarShowResult();
            $showShoppingCarShowResult->showNoShoppingCar();
        }else{
            //说明用户的购物车不是空的
            $showShoppingCarInfoSelect=new ShowShoppingCarInfoSelect();
            $result=$showShoppingCarInfoSelect->theshowShoppingCarInfoSelect($conn,$userName);
            $showShoppingCarShowResult=new ShowShoppingCarShowResult();
            $showShoppingCarShowResult->showhasShoppingCar($result);
        }
        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }

}

?>