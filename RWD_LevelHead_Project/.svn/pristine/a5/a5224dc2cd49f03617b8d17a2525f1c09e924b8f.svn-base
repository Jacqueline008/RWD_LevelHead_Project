<?php

class ConnectDB{
    public static function connecttheDB(){
        $dsn="mysql:host=localhost:3306;dbname=rwd_levelheaddb";
        $username="root";
        $password="";
        $conn=new PDO($dsn,$username,$password);
        $conn->exec("SET NAMES 'utf8'");
        return $conn;
    }
}

?>