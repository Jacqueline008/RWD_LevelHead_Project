<?php
include_once "ISelect.php";

class TVProductSelect implements ISelect {
    public function select($conn){}

    public function thetvProductSelect($begin,$end,$conn){
        $sql= "select Pic,Description,SaleAccount,SellPrice from Product limit ?,?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $begin-1, PDO::PARAM_INT);
        $stmt->bindValue(2, $end-$begin+1, PDO::PARAM_INT);
        $stmt->execute();

        //访问搜索出的?条数据
        $result='"products":[';
        //
        $flag=0;
        while(true){
            if($flag==0){
                $row=$stmt->fetch();
                $result=$result.'{';
                $result=$result.'"Pic":"'.$row[0].'","Description":"'.$row[1].'","SaleAccount":"'.$row[2].'","SellPrice":"'.$row[3].'"';
                $result=$result.'}';
                $flag=1;
            }
            if($row=$stmt->fetch()){
                $result=$result.',{';
                $result=$result.'"Pic":"'.$row[0].'","Description":"'.$row[1].'","SaleAccount":"'.$row[2].'","SellPrice":"'.$row[3].'"';
                $result=$result.'}';
            }else{
                break;
            }
        }
        //
        $result=$result.']';

        //将？条数据返回给客户端
        return $result;
    }

    public function thetvProductSelect2($begin,$end,$conn){
        $sql= "select Pic,Description,SaleAccount,SellPrice,ID,CostPrice,RemainAccount,Earing from Product limit ?,?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $begin-1, PDO::PARAM_INT);
        $stmt->bindValue(2, $end-$begin+1, PDO::PARAM_INT);
        $stmt->execute();

        //访问搜索出的?条数据
        $result='"products":[';
        //
        $flag=0;
        while(true){
            if($flag==0){
                $row=$stmt->fetch();
                $result=$result.'{';
                $result=$result.'"Pic":"'.$row[0].'","Description":"'.$row[1].'","SaleAccount":"'.$row[2].'","SellPrice":"'.$row[3].'","ID":"'.$row[4].'","CostPrice":"'.$row[5].'","RemainAccount":"'.$row[6].'","Earing":"'.$row[7].'"';
                $result=$result.'}';
                $flag=1;
            }
            if($row=$stmt->fetch()){
                $result=$result.',{';
                $result=$result.'"Pic":"'.$row[0].'","Description":"'.$row[1].'","SaleAccount":"'.$row[2].'","SellPrice":"'.$row[3].'","ID":"'.$row[4].'","CostPrice":"'.$row[5].'","RemainAccount":"'.$row[6].'","Earing":"'.$row[7].'"';
                $result=$result.'}';
            }else{
                break;
            }
        }
        //
        $result=$result.']';

        //将？条数据返回给客户端
        return $result;
    }
}

?>