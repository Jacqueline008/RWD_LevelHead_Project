<?php
include_once "IDelete.php";

class DeleteProductDelete implements IDelete {
    public function delete($conn){}

    public function thedeleteProductDelete($conn,$deleteProductID){
        $sqlSelect="delete from Product where ID=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($deleteProductID));
    }
}

?>