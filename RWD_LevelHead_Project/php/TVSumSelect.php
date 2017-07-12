<?php
include_once "ISelect.php";

class TVSumSelect implements ISelect {
    public function select($conn){}

    public function thetvSumSelect($conn){
        $sql="select count(*) from Product";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        foreach($stmt as $row){
            $sumrow=$row[0];
        }
        return $sumrow;
    }
}

?>