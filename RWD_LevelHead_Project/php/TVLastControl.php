<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "TVProductSelect.php";
include_once "CloseDB.php";

class TVLastControl implements IController {
    public function control(){}

    public function thetvLastControl(){
        //连接数据库
        $conn=ConnectDB::connecttheDB();
        //获取flag
        $flag=$_POST["flag"];
        if($flag==0){
            //获取willberow
            $willberow=$_POST["willberow"]-24;
            $willberowEnd=$willberow+11;
            //查询
            if($willberow<0){
                $tvProductSelect=new TVProductSelect();
                $result=$tvProductSelect->thetvProductSelect(1,12,$conn);
                $result='{'.$result.',"willberow":"'.$_POST["willberow"].'","flag":"0","last":"0"}';
                echo $result;
            }else{
                $tvProductSelect=new TVProductSelect();
                $result=$tvProductSelect->thetvProductSelect($willberow,$willberowEnd,$conn);
                $nextwillberow=$willberowEnd+1;
                $result='{'.$result.',"willberow":"'.$nextwillberow.'","flag":"0","last":"1"}';
                echo $result;
            }
        }else{
            //获取willberow
            $willberow=$_POST["willberow"]-12;
            $willberowEnd=$willberow+11;
            //查询
            $tvProductSelect=new TVProductSelect();
            $result=$tvProductSelect->thetvProductSelect($willberow,$willberowEnd,$conn);
            $nextwillberow=$willberowEnd+1;
            $result='{'.$result.',"willberow":"'.$nextwillberow.'","flag":"0","last":"1"}';
            echo $result;
        }
        //关闭数据库
        CloseDB::closetheDB($conn);
    }
}

?>