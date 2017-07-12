<?php
include_once "ISelect.php";

class InfoSelect implements ISelect {
    public function select($conn){}

    public function theinfoSelect($user,$conn){
        //用户名
        $name=$user->getName();
        //从数据库中查找出该用户名对应的电话，头像，地址
        $sqlSelect="select * from user where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($name));
        foreach($stmt as $row){
            $tel=$row["tel"];
            $userPic=$row["userPic"];
            $address=$row["address"];
        }
        //用户实例已经拥有了用户名，电话，头像，地址
        $user->setTel($tel);
        $user->setUserPic($userPic);
        $user->setAddress($address);
        //
        return $user;
    }
}

?>