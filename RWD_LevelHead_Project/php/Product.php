<?php

class Product{
    private $ID=null;
    private $Pic=null;
    private $Description=null;
    private $SaleAccount=null;
    private $SellPrice=null;
    private $CostPrice=null;
    private $RemainAccount=null;
    private $Earing=null;

    //
    public function getID(){
        return $this->ID;
    }
    public function setID($ID){
        $this->ID=$ID;
    }
    //
    public function getPic(){
        return $this->Pic;
    }
    public function setPic($Pic){
        $this->Pic=$Pic;
    }//
    public function getDescription(){
        return $this->Description;
    }
    public function setDescription($Description){
        $this->Description=$Description;
    }//
    public function getSaleAccount(){
        return $this->SaleAccount;
    }
    public function setSaleAccount($SaleAccount){
        $this->SaleAccount=$SaleAccount;
    }//
    public function getSellPrice(){
        return $this->SellPrice;
    }
    public function setSellPrice($SellPrice){
        $this->SellPrice=$SellPrice;
    }//
    public function getCostPrice(){
        return $this->CostPrice;
    }
    public function setCostPrice($CostPrice){
        $this->CostPrice=$CostPrice;
    }//
    public function getRemainAccount(){
        return $this->RemainAccount;
    }
    public function setRemainAccount($RemainAccount){
        $this->RemainAccount=$RemainAccount;
    }//
    public function getEaring(){
        return $this->Earing;
    }
    public function setEaring($Earing){
        $this->Earing=$Earing;
    }
}

?>