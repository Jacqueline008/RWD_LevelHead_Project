<?php
//指定该PHP返回的数据为json格式
header("Content-Type:application/json;charset=utf-8");
//解决跨域问题
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST,GET");

include_once "StartSession.php";
include_once "HeaderGetSession.php";
include_once "HeaderGenerateArray.php";
include_once "HeaderGenerateJSON.php";

StartSession::starttheSession();
//获取会话变量
$headerGetSession=new HeaderGetSession();
$userName=$headerGetSession->getSessionUserName();
$userType=$headerGetSession->getSessionUserType();

//普通用户状态，管理员状态，未登录状态
$arr=null;
if(($userName!=null)&&($userType!=null)){
    if($userType=="normal"){
        //登录用户为普通用户
        $headerGenerateArray=new HeaderGenerateArray();
        $arr=$headerGenerateArray->theheaderGenerateArray("1","0",$userName,"1","1");
    }else if($userType=="admin"){
        //登录用户为管理员
        $headerGenerateArray=new HeaderGenerateArray();
        $arr=$headerGenerateArray->theheaderGenerateArray("1","0",$userName,"0","1");
    }
}else{
    //用户处于未登录状态
    $headerGenerateArray=new HeaderGenerateArray();
    $arr=$headerGenerateArray->theheaderGenerateArray("1","1","0","0","0");
}

//将用户状态传给页面
$headerGenerateJSON=new HeaderGenerateJSON();
$json=$headerGenerateJSON->theheaderGenerateJSON($arr);
echo $json;


?>