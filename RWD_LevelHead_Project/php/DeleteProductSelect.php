<?php
include_once "ISelect.php";

class DeleteProductSelect implements ISelect {
    public function select($conn){}

    public function thedeleteProductSelect($conn,$deleteProductID){
        $sqlSelect="select * from Product where ID=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($deleteProductID));
        $flag=0;
        foreach($stmt as $row){
            $flag=1;
        }
        return $flag;
    }
}


?>