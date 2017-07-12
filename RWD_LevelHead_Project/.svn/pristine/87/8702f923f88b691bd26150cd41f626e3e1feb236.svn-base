<?php
include_once 'ISelect.php';

class RegisterSelect implements ISelect {

    public function select($conn){}

    public function theregisterSelect($name,$conn){
        $sqlSelect="select * from user where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($name));
        $flag=0;
        foreach($stmt as $row){
            $flag=1;
        }
        return $flag;
    }
}

?>