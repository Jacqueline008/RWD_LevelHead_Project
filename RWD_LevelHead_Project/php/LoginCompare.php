<?php
include_once "ICompare.php";

class LoginCompare implements ICompare {
    public function compare(){}

    //返回指定$pwd与$pwdInDB是否相等
    //1表示相等 0表示不相等
    public function theloginCompare($pwd,$pwdInDB){
        if($pwd==$pwdInDB){
            return 1;
        }else{
            return 0;
        }
    }
}

?>