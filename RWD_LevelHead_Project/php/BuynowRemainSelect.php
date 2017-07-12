<?php
include_once "ISelect.php";

class BuynowRemainSelect implements ISelect {
    public function select($conn){}

    //该产品库存为0则返回1
    public function thebuynowRemainSelect($conn,$productID){
        $sqlSelectRemainAccount="select RemainAccount from Product where ID=?";
        $stmtSelectRemainAccount=$conn->prepare($sqlSelectRemainAccount);
        $stmtSelectRemainAccount->execute(array($productID));
        $flag=0;
        foreach($stmtSelectRemainAccount as $row){
            if($row[0]==0){
                $flag=1;
            }
        }
        return $flag;
    }
}

?>