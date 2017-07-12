document.getElementById("loginsubmit").addEventListener("click",function(){
    //创建一个xhr对象
    var request=new XMLHttpRequest();
    request.open("POST","../php/LoginClient.php");
    var data="loginuser="+document.getElementById("loginuser").value+"&loginpwd="+document.getElementById("loginpwd").value;
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    request.send(data);
    //监视readyState的值的变化
    request.onreadystatechange=function(){
        if(request.readyState===4){
            if(request.status===200){
                if(request.responseText==1){
                    //说明用户名和密码都输入正确，则跳转到首页
                    window.location.href="http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Home.html";
                }
                document.getElementById("error_message").innerHTML=request.responseText;
            }else{
                alert("发生错误");
            }
        }
    }
})