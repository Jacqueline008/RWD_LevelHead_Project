<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "InfoUploadPicUpload.php";
include_once "StartSession.php";
include_once "InfoUploadPicGetSession.php";
include_once "InfoUploadPicUpdate.php";
include_once "CloseDB.php";
include_once "InfoUploadPicShowResult.php";

class InfoUploadPicController implements IController {
    public function control(){}

    public function theinfoUploadPicControl(){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();
        //将用户上传的图片从临时路径存储到服务器的一个本地路径
        $infoUploadPicUpload=new InfoUploadPicUpload();
        $picPath=$infoUploadPicUpload->theinfoUploadPicupload();
        //
        StartSession::starttheSession();
        //获取到该会话中的用户名
        $infoUploadPicGetSession=new InfoUploadPicGetSession();
        $userName=$infoUploadPicGetSession->theinfoUploadPicgetSession();
        //将该用户名对应的picPath更改为$picPath
        $infoUploadPicUpdate=new InfoUploadPicUpdate();
        $infoUploadPicUpdate->theinfoUploadPicupdate($userName,$picPath,$conn);
        //关闭数据库连接
        CloseDB::closetheDB($conn);
        //再次跳转到该页
        $infoUploadPicShowResult=new InfoUploadPicShowResult();
        $infoUploadPicShowResult->theinfoUploadPicshowResult();
    }
}

?>