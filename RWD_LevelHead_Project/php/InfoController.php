<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "InfoSelect.php";
include_once "InfoGenerateArray.php";
include_once "InfoGenerateJSON.php";
include_once "CloseDB.php";

class InfoController implements IController {
    public function control(){}

    public function theinfoController($user){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();
        //从数据库中获取该用户的电话，头像，地址
        $infoSelect=new InfoSelect();
        $user=$infoSelect->theinfoSelect($user,$conn);
        //
        $name=$user->getName();
        $tel=$user->getTel();
        $userPic=$user->getUserPic();
        $address=$user->getAddress();
        //生成数组
        $infoGenerateArray=new InfoGenerateArray();
        $arr=$infoGenerateArray->theinfoGenerateArray($name,$tel,$userPic,$address);
        //生成json
        $infoGenerateJSON=new InfoGenerateJSON();
        $json=$infoGenerateJSON->theinfoGenerateJSON($arr);

        echo $json;

        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }
}

?>