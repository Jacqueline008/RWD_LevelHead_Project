<?php
include_once 'IController.php';
include_once 'ConnectDB.php';
include_once 'RegisterSelect.php';
include_once 'RegisterInsert.php';
include_once 'RegisterShowResult.php';
include_once 'CloseDB.php';

class RegisterController implements IController {

    public function control(){}

    public function theregisterControl($registerUserFormatted){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();
        //获取格式化后的注册用户的信息中的姓名
        $name=$registerUserFormatted->getName();
        //检查user表中是否有同名用户
        $registerSelect=new RegisterSelect();
        $selectResult=$registerSelect->theregisterSelect($name,$conn);

        if($selectResult==0){
            //没有同名用户，则加入user表
            //获取格式化后的注册用户的信息
            $name=$registerUserFormatted->getName();
            $pwd=$registerUserFormatted->getPwd();
            $tel=$registerUserFormatted->getTel();
            $userPic=$registerUserFormatted->getUserPic();
            $address=$registerUserFormatted->getAddress();
            //将用户信息插入数据库
            $registerInsert=new RegisterInsert();
            $registerInsert->theregisterInsert($name,$pwd,$tel,$userPic,$address,$conn);

            //向用户返回注册成功信息
            $registerShowResult=new RegisterShowResult();
            $registerShowResult->showSuccessResult();
        }else{
            //向用户返回注册失败信息
            $registerShowResult=new RegisterShowResult();
            $registerShowResult->showErrorResult();
        }

        //关闭数据库连接
        CloseDB::closetheDB($conn);

    }

}

?>