<?php
include_once "ISelect.php";

class UserOrderInfoSelect implements ISelect {
    public function select($conn){}

    public function theuserOrderInfoSelect($conn,$userName){
        //查询该用户在UserOrder表中是否有信息
        $sqlSelect="select * from UserOrder where customerName=?";
        $stmtSelect=$conn->prepare($sqlSelect);
        $stmtSelect->execute(array($userName));
        $flag=0;
        foreach($stmtSelect as $row){
            $flag=1;
        }
        return $flag;
    }
}

?>