<?php
include_once "IUpdate.php";

class AddShoppingCarUpdate implements IUpdate {
    public function update($conn){}

    public function theaddShoppingCarUpdate($conn,$userName,$productID,$productCount){
        $sqlUpdate="update ShoppingCar set productCount=productCount+? where customerName=? and productID=?";
        $stmtUpdate=$conn->prepare($sqlUpdate);
        $stmtUpdate->execute(array($productCount,$userName,$productID));
    }
}

?>