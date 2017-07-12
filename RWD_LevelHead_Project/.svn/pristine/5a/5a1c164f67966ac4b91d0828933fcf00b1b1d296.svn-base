<?php
include_once "IUpdate.php";

class InfoUploadPicUpdate implements IUpdate {
    public function update($conn){}

    public function theinfoUploadPicupdate($userName,$picPath,$conn){
        //将该$userName在user中的$picPath更新
        $sqlSelect="update user set userPic=? where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($picPath,$userName));
    }
}

?>