<?php
include_once "IUpdate.php";

class BuynowUpdate implements IUpdate {
    public function update($conn){}

    public function thebuynowUpdate($conn,$productID,$productCount){
        //将product表中相应产品的库存减去相应数量
        $sqlUpdate="update Product set RemainAccount=RemainAccount-? where ID=?";
        $stmtUpdate=$conn->prepare($sqlUpdate);
        $stmtUpdate->execute(array($productCount,$productID));
    }
}

?>