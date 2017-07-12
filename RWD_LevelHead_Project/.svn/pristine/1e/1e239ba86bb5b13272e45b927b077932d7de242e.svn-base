<?php
include_once "ISelect.php";

class PaymentUserSelect implements ISelect {
    public function select($conn){}

    public function thepaymentUserSelect($conn,$userName){
        $sqlSelect="select address,tel from User where name=?";
        $stmtSelect=$conn->prepare($sqlSelect);
        $stmtSelect->execute(array($userName));
        foreach ($stmtSelect as $row){
            $result='"address":"'.$row[0].'","name":"'.$userName.'","tel":"'.$row[1].'"';
        }
        return $result;
    }
}

?>