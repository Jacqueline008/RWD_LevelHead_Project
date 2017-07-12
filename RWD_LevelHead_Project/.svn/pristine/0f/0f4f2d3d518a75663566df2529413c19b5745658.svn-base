<?php
include_once "ISelect.php";

class ShowShoppingCarInfoSelect implements ISelect {
    public function select($conn){}

    public function theshowShoppingCarInfoSelect($conn,$userName){
        //查询该用户在shoppingcar的信息　shoppingcar&product
        $sqlSelectJoin="select Pic,Description,SellPrice,productCount from Product join ShoppingCar where productID=ID and customerName=?";
        $stmtSelectJoin=$conn->prepare($sqlSelectJoin);
        $stmtSelectJoin->execute(array($userName));

        //访问搜索出的?条数据
        $result='"shoppingcar":[';
        //
        $flag=0;
        while(true){
            if($flag==0){
                $row=$stmtSelectJoin->fetch();
                $result=$result.'{';
                $result=$result.'"pic":"'.$row[0].'","description":"'.$row[1].'","sellprice":"'.$row[2].'","productcount":"'.$row[3].'"';
                $result=$result.'}';
                $flag=1;
            }
            if($row=$stmtSelectJoin->fetch()){
                $result=$result.',{';
                $result=$result.'"pic":"'.$row[0].'","description":"'.$row[1].'","sellprice":"'.$row[2].'","productcount":"'.$row[3].'"';
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