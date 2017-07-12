<?php
//指定该PHP返回的数据为json格式
header("Content-Type:application/json;charset=utf-8");
//解决跨域问题
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST,GET");

include_once "User.php";
include_once "StartSession.php";
include_once "InfoGetSession.php";
include_once "InfoController.php";

//创建一个用户实例
$user=new User();
//
StartSession::starttheSession();
//获取到该会话中的用户名
$infoGetSession=new InfoGetSession();
$userName=$infoGetSession->theinfoGetSession();
//将该用户名赋值给用户实例
$user->setName($userName);

//创建一个控制者
$infoController=new InfoController();
$infoController->theinfoController($user);


?>