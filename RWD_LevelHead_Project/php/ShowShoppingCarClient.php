<?php
//指定该PHP返回的数据为json格式
header("Content-Type:application/json;charset=utf-8");
//解决跨域问题
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST,GET");

include_once "ShowShoppingCarControl.php";

$showShoppingCarControl=new ShowShoppingCarControl();
$showShoppingCarControl->theshowShoppingCarControl();

?>