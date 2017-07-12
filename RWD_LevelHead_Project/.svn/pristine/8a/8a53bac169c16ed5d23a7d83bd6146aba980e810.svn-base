<?php
include_once "IUpload.php";

class InfoUploadPicUpload implements IUpload {
    public function upload(){}

    public function theinfoUploadPicupload(){
        //获取用户上传的头像名称
        $picname=$_FILES['userNewPic']["name"];
        //设置保存到服务器本地的路径
        $picpath="../images/".$picname;
        //将用户上传的图片从临时路径存储到服务器的一个本地路径
        move_uploaded_file($_FILES['userNewPic']["tmp_name"],$picpath);

        //
        return $picpath;
    }
}

?>