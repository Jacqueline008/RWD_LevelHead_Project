<?php
include_once "IController.php";
include_once "StartSession.php";
include_once "PaymentGetSession.php";
include_once "ConnectDB.php";
include_once "PaymentProductSelect.php";
include_once "PaymentUserSelect.php";
include_once "CloseDB.php";

class PaymentControl implements IController {
    public function control(){}

    public function thepaymentControl(){

        //获取登录的用户名
        StartSession::starttheSession();
        $paymentGetSession=new PaymentGetSession();
        $userName=$paymentGetSession->thepaymentGetSession();

        //获取数据库连接
        $conn=ConnectDB::connecttheDB();

        //检索出userorder表中的订单信息
        $paymentProductSelect=new PaymentProductSelect();
        $result1=$paymentProductSelect->thepaymentProductSelect($conn,$userName);

        //从user表中检索出该用户信息
        $paymentUserSelect=new PaymentUserSelect();
        $result2=$paymentUserSelect->thepaymentUserSelect($conn,$userName);

        $result='{'.$result1.','.$result2.'}';
        echo $result;

        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }
}

?>