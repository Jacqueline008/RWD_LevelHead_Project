<?php
include_once 'IFormatView.php';

class RegisterFormatView implements IFormatView {

    public function toFormatObject($unFormatOject){
        $unFormatOject->setUserPic("../images/userPic.jpg");
        $unFormatOject->setAddress("您还未填写收货地址");
        $formattedObject=$unFormatOject;
        return $formattedObject;
    }

}

?>