<?php
include_once "ISelect.php";

class UserOrderInfoOrderSelect implements ISelect {
    public function select($conn){}

    public function theuserOrderInfoOrderSelect($conn,$userName){
        //查询该用户在shoppingcar的信息　shoppingcar&product
        $sqlSelectJoin="select A.OrderID,B.Pic,B.Description,B.SellPrice ,A.productCount from UserOrder A join Product B where A.productID=B.ID and A.customerName=?";
        $stmtSelectJoin=$conn->prepare($sqlSelectJoin);
        $stmtSelectJoin->execute(array($userName));

        //访问搜索出的?条数据
        $result='"order":[';
        //
        $flag=0;
        while(true){
            if($flag==0){
                $row=$stmtSelectJoin->fetch();
                $result=$result.'{';
                $result=$result.'"OrderID":"'.$row[0].'","Pic":"'.$row[1].'","Description":"'.$row[2].'","SellPrice":"'.$row[3].'","productCount":"'.$row[4].'"';
                $result=$result.'}';
                $flag=1;
            }
            if($row=$stmtSelectJoin->fetch()){
                $result=$result.',{';
                $result=$result.'"OrderID":"'.$row[0].'","Pic":"'.$row[1].'","Description":"'.$row[2].'","SellPrice":"'.$row[3].'","productCount":"'.$row[4].'"';
                $result=$result.'}';
            }else{
                break;
            }
        }
        //
        $result=$result.']';
        return $result;
    }
}

?>