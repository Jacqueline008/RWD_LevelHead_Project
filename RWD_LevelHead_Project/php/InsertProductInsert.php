<?php
include_once "IInsert.php";

class InsertProductInsert implements IInsert {
    public function insert($conn){}

    public function theinsertProductInsert($conn,$ID,$Pic,$Description,$SaleAccount,$SellPrice,$CostPrice,$RemainAccount,$Earing){
        //将从录入产品表单中检索的数据插入product表中
        $sqlInsert="insert into Product values(?,?,?,?,?,?,?,?)";
        $stmtInsert=$conn->prepare($sqlInsert);
        $stmtInsert->execute(array($ID,$Pic,$Description,$SaleAccount,$SellPrice,$CostPrice,$RemainAccount,$Earing));
    }
}

?>