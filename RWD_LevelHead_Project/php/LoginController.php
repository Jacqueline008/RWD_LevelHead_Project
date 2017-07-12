<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "LoginSelect.php";
include_once "LoginShowResult.php";
include_once "LoginCompare.php";
include_once "StartSession.php";
include_once "LoginSetSession.php";
include_once "CloseDB.php";

class LoginController implements IController {
    public function control(){}

    public function theloginControl($loginUser){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();
        //获取登录用户的信息中的姓名
        $name=$loginUser->getName();
        //检查该登录用户是否在数据库中存在
        $loginSelect=new LoginSelect();
        $selectResult=$loginSelect->theloginSelect($name,$conn);//0表示没有该用户信息，1表示有该用户信息

        if($selectResult==0){
            //$selectResult=0,如果数据库中没有该用户的信息
            //向用户展示还未注册错误
            $loginShowResult=new LoginShowResult();
            $loginShowResult->showNoUserError();
        }else{
            //$selectResult=1,数据库中有该用户的信息
            //获取该用户在数据库中的密码
            $pwd=$loginUser->getPwd();
            $pwdInDB=$loginSelect->theloginSelectPwd($name,$conn);
            $loginCompare=new LoginCompare();
            $pwdResult=$loginCompare->theloginCompare($pwd,$pwdInDB);
            if($pwdResult==1){
                //$pwdResult=1,用户输入密码与数据库中一致
                //设置会话变量后跳转到home.html页面
                $loginShowResult=new LoginShowResult();
                $loginShowResult->showSuccessResult();
                StartSession::starttheSession();
                $loginSetSession=new LoginSetSession();
                $loginSetSession->theloginSetSession($name);
            }else{
                //$pwdResult=0,用户输入密码与数据库不一致
                //向用户展示密码错误
                $loginShowResult=new LoginShowResult();
                $loginShowResult->showPwdError();
            }
        }

        //关闭数据库
        CloseDB::closetheDB($conn);
    }
}

?>