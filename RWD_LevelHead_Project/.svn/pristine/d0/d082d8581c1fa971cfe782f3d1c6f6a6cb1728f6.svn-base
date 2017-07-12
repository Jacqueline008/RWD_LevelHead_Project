<?php
include_once "IController.php";
include_once "StartSession.php";
include_once "AddShoppingCarGetSession.php";
include_once "AddShoppingCarShowResult.php";
include_once "ConnectDB.php";
include_once "AddShoppingCarSelect.php";
include_once "AddShoppingCarInsert.php";
include_once "AddShoppingCarUpdate.php";
include_once "CloseDB.php";

class AddShoppingCarControl implements IController {
    public function control(){}

    public function theaddShoppingCarControl(){

        //获取产品id和用户想要加入购物车的数量
        $productID=$_POST["productID"];
        $productCount=$_POST["productCount"];

        //获取登录的用户名
        StartSession::starttheSession();
        $addShoppingCarGetSession=new AddShoppingCarGetSession();
        $userName=$addShoppingCarGetSession->theaddShoppingCargetSession();

        //判断用户是否登录,若未登录则会向用户展示应该先登录的提示
        if($userName==null){
            $addShoppingCarShowResult=new AddShoppingCarShowResult();
            $addShoppingCarShowResult->showNoLoginError();
        }else{
            //查看顾客之前有没有加入过该产品，1.如果没有加入过就加入一行到shoppingcar表中,2.如果加入过该产品就将shoppingCar表中的产品数量加上这次购买的数量

            //获取数据库连接
            $conn=ConnectDB::connecttheDB();
            //查询该用户之前是否有加入过该商品
            $addShoppingCarSelect=new AddShoppingCarSelect();
            $selectResult=$addShoppingCarSelect->theaddShoppingCarSelect($conn,$userName,$productID);

            //如果该用户之前没有加入过该商品
            if($selectResult==0){
                //将顾客名字和产品ID和购买数量存入ShoppingCar表当中
                $addShoppingCarInsert=new AddShoppingCarInsert();
                $addShoppingCarInsert->theaddShoppingCarInsert($conn,$userName,$productID,$productCount);
                //向用户展示加入购物车成功
                $addShoppingCarShowResult=new AddShoppingCarShowResult();
                $addShoppingCarShowResult->showAddSuccessResult();
            }else{
                //如果该用户之前没有加入过该商品
                //将shoppingcar表中与该顾客和产品id对应的那一行的数量更新
                $addShoppingCarUpdate=new AddShoppingCarUpdate();
                $addShoppingCarUpdate->theaddShoppingCarUpdate($conn,$userName,$productID,$productCount);
                //向用户展示加入购物车成功
                $addShoppingCarShowResult=new AddShoppingCarShowResult();
                $addShoppingCarShowResult->showAddSuccessResult();
            }

            //关闭数据库连接
            CloseDB::closetheDB($conn);
        }

    }

}

?>