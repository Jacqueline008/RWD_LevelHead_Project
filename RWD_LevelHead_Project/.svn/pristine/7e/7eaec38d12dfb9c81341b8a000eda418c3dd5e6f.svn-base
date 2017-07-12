<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "StartSession.php";
include_once "InfoUploadTextGetSession.php";
include_once "InfoUploadTextUpdate.php";
include_once "CloseDB.php";
include_once "InfoUploadTextShowResult.php";

class InfoUploadTextController implements IController {
    public function control(){}

    public function theinfoUploadTextControl(){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();
        //获取用户名字
        StartSession::starttheSession();
        $infoUploadTextGetSession=new InfoUploadTextGetSession();
        $name=$infoUploadTextGetSession->theinfoUploadTextgetSession();
        //获取用户电话，地址
        $tel=$_POST["UserTel"];
        $address=$_POST["UserAddr"];
        //将用户信息更新
        $infoUploadTextUpdate=new InfoUploadTextUpdate();
        $infoUploadTextUpdate->theinfoUploadTextupdate($tel,$address,$name,$conn);
        //关闭数据库连接
        CloseDB::closetheDB($conn);
        //直接再次跳转到该页面
        $infoUploadTextShowResult=new InfoUploadTextShowResult();
        $infoUploadTextShowResult->theinfoUploadTextshowResult();
    }
}

?>