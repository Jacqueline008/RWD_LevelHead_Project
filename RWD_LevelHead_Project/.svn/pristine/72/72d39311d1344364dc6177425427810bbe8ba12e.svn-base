<?php
include_once "IUpdate.php";

class InfoUploadTextUpdate implements IUpdate {
    public function update($conn){}

    public function theinfoUploadTextupdate($tel,$address,$name,$conn){
        $sqlSelect="update user set tel=?,address=? where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($tel,$address,$name));
    }
}

?>