<?php
//指定该PHP返回的数据为text无格式正文
header("Content-Type: text/plain;charset=utf-8");
//解决跨域问题
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST,GET");

include_once "StartSession.php";
include_once "HeaderGetSession.php";

StartSession::starttheSession();
//获取会话变量
$headerGetSession=new HeaderGetSession();
$userName=$headerGetSession->getSessionUserName();

//返回该登录用户是普通用户还是管理员
if(preg_match("/^\\*/",$userName)){
    echo "admin";
}else{
    echo "normal";
}


?>