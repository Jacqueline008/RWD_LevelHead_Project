<?php
include_once "IController.php";
include_once "StartSession.php";
include_once "UserOrderInfoGetSession.php";
include_once "ConnectDB.php";
include_once "UserOrderInfoSelect.php";
include_once "UserOrderInfoShowResult.php";
include_once "UserOrderInfoOrderSelect.php";
include_once "CloseDB.php";

class UserOrderInfoControl implements IController {

    public function control(){}

    public function theuserOrderInfoControl(){
        //获取登录的用户名
        StartSession::starttheSession();
        $userOrderInfoGetSession=new UserOrderInfoGetSession();
        $userName=$userOrderInfoGetSession->theuserOrderInfoGetSession();

        //获取数据库连接
        $conn=ConnectDB::connecttheDB();

        //查询该用户在UserOrder表中是否有信息
        $userOrderInfoSelect=new UserOrderInfoSelect();
        $selectResult=$userOrderInfoSelect->theuserOrderInfoSelect($conn,$userName);

        if($selectResult==0){
            //说明该用户没有购买记录
            $userOrderInfoShowResult=new UserOrderInfoShowResult();
            $userOrderInfoShowResult->showNoOrder();
        }else{
            //说明该用户有购买记录
            $userOrderInfoOrderSelect=new UserOrderInfoOrderSelect();
            $result=$userOrderInfoOrderSelect->theuserOrderInfoOrderSelect($conn,$userName);
            $userOrderInfoShowResult=new UserOrderInfoShowResult();
            $userOrderInfoShowResult->showhasOrder($result);
        }
        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }
}

?>