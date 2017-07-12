<?php
include_once "IInsert.php";

class BuynowInsert implements IInsert {
    public function insert($conn){}

    public function thebuynowInsert($conn,$userName,$productID,$productCount){
        $sqlInsert="insert into UserOrder(customerName,productID,productCount) values (?,?,?);";
        $stmtInsert=$conn->prepare($sqlInsert);
        $stmtInsert->execute(array($userName,$productID,$productCount));
    }
}

?>