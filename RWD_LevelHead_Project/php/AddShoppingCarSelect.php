<?php
include_once "ISelect.php";

class AddShoppingCarSelect implements ISelect {
    public function select($conn){}

    //购物车表中如果该用户下有该产品则返回1
    public function theaddShoppingCarSelect($conn,$userName,$productID){
        $sqlSelect="select * from ShoppingCar where customerName=? and productID=?";
        $stmtSelect=$conn->prepare($sqlSelect);
        $stmtSelect->execute(array($userName,$productID));
        $flag=0;
        foreach($stmtSelect as $row){
            $flag=1;
        }
        return $flag;
    }
}

?>