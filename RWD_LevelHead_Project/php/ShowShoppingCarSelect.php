<?php
include_once "ISelect.php";

class ShowShoppingCarSelect implements ISelect {
    public function select($conn){}

    public function theshowShoppingCarSelect($conn,$userName){
        //查询该用户在shoppingcar表中是否有信息
        $sqlSelect="select * from ShoppingCar where customerName=?";
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