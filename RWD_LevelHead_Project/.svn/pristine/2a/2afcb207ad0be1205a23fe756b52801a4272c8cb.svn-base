<?php
include_once 'RegisterView.php';
include_once 'RegisterFormatView.php';
include_once 'RegisterController.php';

//生成注册用户
$registerView=new RegisterView();
$registerUser=$registerView->toObject();
//生成格式化后的注册用户
$registerFormatView=new RegisterFormatView();
$registerUserFormatted=$registerFormatView->toFormatObject($registerUser);
//生成注册控制者
$registerController=new RegisterController();
$registerController->theregisterControl($registerUserFormatted);

?>