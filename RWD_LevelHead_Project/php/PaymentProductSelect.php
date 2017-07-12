<?php
include_once "ISelect.php";

class PaymentProductSelect implements ISelect {
    public function select($conn){}

    public function thepaymentProductSelect($conn,$userName){
        $sqlSelect="select A.OrderID,B.Pic,B.Description,B.SellPrice ,A.productCount from UserOrder A join Product B where 
A.productID=B.ID and A.customerName=? order by OrderID desc limit 0,1";
        $stmtSelect=$conn->prepare($sqlSelect);
        $stmtSelect->execute(array($userName));
        foreach($stmtSelect as $row){
            $result='"OrderID":"'.$row[0].'","Pic":"'.$row[1].'","Description":"'.$row[2].'","SellPrice":"'.$row[3].'","productCount":"'.$row[4].'"';
        }
        return $result;
    }
}

?>