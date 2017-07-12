<?php
include_once "IInsert.php";

class AddShoppingCarInsert implements IInsert {
    public function insert($conn){}

    public function theaddShoppingCarInsert($conn,$userName,$productID,$productCount){
        $sqlInsert="insert into ShoppingCar values(?,?,?)";
        $stmtInsert=$conn->prepare($sqlInsert);
        $stmtInsert->execute(array($userName,$productID,$productCount));
    }
}

?>