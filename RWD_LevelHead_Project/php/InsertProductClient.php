<?php
include_once "InsertProductView.php";
include_once "InsertProductControl.php";

//生成一个产品对象
$insertProductView=new InsertProductView();
$insertProduct=$insertProductView->toObject();

$insertProductControl=new InsertProductControl();
$insertProductControl->theinsertProductControl($insertProduct);

//再次跳转回管理页面
header("Location:http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Logined_Admin.html");

?>