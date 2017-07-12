<?php
include_once "StartSession.php";
include_once "LogoutClearSession.php";

StartSession::starttheSession();

//清除已经设置的会话变量
$logoutClearSession=new LogoutClearSession();
$logoutClearSession->thelogoutClearSession();

?>