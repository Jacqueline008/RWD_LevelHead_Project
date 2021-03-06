//获取用户状态，从而显示相应的标头
function getUserStatus(){
    //创建一个xhr对象
    var request=new XMLHttpRequest();
    request.open("GET","../php/HeaderClient.php");
    request.send();
    //监视readyState的值的变化
    request.onreadystatechange=function(){
        if(request.readyState===4){
            if(request.status===200){
                var data=JSON.parse(request.responseText);
                if(data.home=="0"){
                    document.getElementsByClassName("sn-home")[0].style.display="none";
                }
                if(data.login=="0"){
                    document.getElementsByClassName("sn-login")[0].style.display="none";
                }
                if(data.user=="0"){
                    document.getElementsByClassName("sn-user")[0].style.display="none";
                }
                if(data.user!="0"){
                    document.getElementsByClassName("sn-user")[0].innerHTML="hi , "+data.user;
                }
                if(data.chart=="0"){
                    document.getElementsByClassName("sn-chart")[0].style.display="none";
                }
                if(data.logout=="0"){
                    document.getElementsByClassName("sn-logout")[0].style.display="none";
                }

            }else{
                alert("发生错误");
            }
        }
    }
}
getUserStatus();


$(function () {
    //给下拉菜单的图标添加点击事件
    $(".sn-showmenu").click(function () {
        $(".sn-quick-menu").slideToggle();
    });

    //点击退出连接时，弹出确认退出对话框
    $(".sn-logout").click(function () {
        var response=confirm("确定退出本系统?");
        //如果用户确认退出，则后台会清除会话变量，并且此脚本会将页面跳转到首页
        //begin
        if(response==true){
            var request=new XMLHttpRequest();
            request.open("GET","../php/LogoutClient.php");
            request.send();
            //监视readyState的值的变化
            request.onreadystatechange=function(){
                if(request.readyState===4){
                    if(request.status===200){
                        window.location.href="http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Home.html";
                    }else{
                        alert("发生错误");
                    }
                }
            }
        }
        //end
    });

    //点击用户名连接时，根据用户是普通用户还是管理员，从而跳转到不同的页面
    $(".sn-user").click(function () {
        var request=new XMLHttpRequest();
        request.open("GET","../php/HeaderUserClient.php");
        request.send();
        //监视readyState的值的变化
        request.onreadystatechange=function(){
            if(request.readyState===4){
                if(request.status===200){
                    if(request.responseText=="normal"){
                        window.location.href="http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Logined_NormalUser.html";
                    }else{
                        window.location.href="http://182.254.152.14/phpStorm_Project/RWD_LevelHead_Project/html/Logined_Admin_All.html";
                    }
                }else{
                    alert("发生错误");
                }
            }
        }
    });
});