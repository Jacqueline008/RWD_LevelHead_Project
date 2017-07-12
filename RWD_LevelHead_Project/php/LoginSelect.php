<?php
include_once "ISelect.php";

class LoginSelect implements ISelect {
    public function select($conn){}

    //返回指定$name是否在数据库存在
    //$flag=0表示数据库中没有该用户信息;$flag=1表示数据库中有该用户信息
    public function theloginSelect($name,$conn){
        $sqlSelect="select * from user where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($name));
        $flag=0;
        foreach($stmt as $row){
            $flag=1;
        }
        return $flag;
    }

    //返回指定$name在数据库中对应的密码
    public function theloginSelectPwd($name,$conn){
        $sqlSelect="select * from user where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($name));
        $pwdInDB=0;
        foreach($stmt as $row){
            $pwdInDB=$row["pwd"];
        }
        return $pwdInDB;
    }
}

?>