<?php
include_once "IView.php";
include_once "Product.php";

class InsertProductView implements IView {
    public function toObject(){
        $insertProduct=new Product();
        $insertProduct->setID($_POST["in-pd-id"]);
        //
        //获取用户上传的头像名称
        $picname=$_FILES['in-pd-pic']["name"];
        //设置保存到服务器本地的路径
        $picpath="../images/".$picname;
        //将用户上传的图片从临时路径存储到服务器的一个本地路径
        move_uploaded_file($_FILES['in-pd-pic']["tmp_name"],$picpath);
        $insertProduct->setPic($picpath);
        //
        $insertProduct->setDescription($_POST["in-pd-description"]);
        $insertProduct->setSaleAccount($_POST["in-pd-saleaccount"]);
        $insertProduct->setSellPrice($_POST["in-pd-sellprice"]);
        $insertProduct->setCostPrice($_POST["in-pd-costprice"]);
        $insertProduct->setRemainAccount($_POST["in-pd-remainaccount"]);
        $insertProduct->setEaring($_POST["in-pd-earing"]);
        return $insertProduct;
    }
}

?>