<?php
include_once "IController.php";
include_once "ConnectDB.php";
include_once "TVSumSelect.php";
include_once "TVProductSelect.php";
include_once "CloseDB.php";

class TVNextControl implements IController {
    public function control(){}

    public function theTVNextControl(){
        //获取数据库连接
        $conn=ConnectDB::connecttheDB();

        //获取用户想要展示的开始行数
        $willberow=$_POST["willberow"];
        $willberowEnd=$willberow+11;


        //获取数据库中product表中的总行数
        $tvSumSelect=new TVSumSelect();
        $sumrow=$tvSumSelect->thetvSumSelect($conn);

        //获取如果取走12行，product表中还剩下的行数
        $remainrow=$sumrow-$willberowEnd;

        //从product表中查询
        if($remainrow>0){
            $tvProductSelect=new TVProductSelect();
            $result=$tvProductSelect->thetvProductSelect($willberow,$willberowEnd,$conn);
            $nextwillberow=$willberowEnd+1;
            $result='{'.$result.',"willberow":"'.$nextwillberow.'","flag":"0","next":"1"}';
            echo $result;
        }else{
            $tvProductSelect=new TVProductSelect();
            $result=$tvProductSelect->thetvProductSelect($willberow,$sumrow,$conn);
            $result='{'.$result.',"willberow":"'.$willberow.'","flag":"1","next":"0"}';
            echo $result;
        }

        //关闭数据库连接
        CloseDB::closetheDB($conn);
    }
}

?>