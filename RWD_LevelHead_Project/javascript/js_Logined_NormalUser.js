//获取用户信息
function getUserInfo(){
    //创建一个xhr对象
    var request=new XMLHttpRequest();
    request.open("GET","../php/InfoClient.php");
    request.send();
    //监视readyState的值的变化
    request.onreadystatechange=function(){
        if(request.readyState===4){
            if(request.status===200){
                var data=JSON.parse(request.responseText);
                //
                var name=data.name;
                var userPic=data.userPic;
                var tel=data.tel;
                var address=data.address;
                //
                document.getElementsByClassName("UserName")[0].value=name;
                document.getElementsByClassName("userOldPic")[0].src=userPic;
                document.getElementsByClassName("UserTel")[0].value=tel;
                document.getElementsByClassName("UserAddr")[0].innerHTML=address;
            }else{
                alert("发生错误");
            }
        }
    }
}
getUserInfo();

