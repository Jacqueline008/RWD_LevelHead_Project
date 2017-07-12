<?php
include_once 'IInsert.php';

class RegisterInsert implements IInsert {

    public function insert($conn){}

    public function theregisterInsert($name,$pwd,$tel,$userPic,$address,$conn){
        $sqlInsert="insert into user(name,pwd,tel,userPic,address) values(?,?,?,?,?)";
        $stmt=$conn->prepare($sqlInsert);
        $stmt->execute( array($name,$pwd,$tel,$userPic,$address) ) ;
    }

}

?>