//直接请求ShowShoppingCarClient.php
//创建一个xhr对象
var request=new XMLHttpRequest();
request.open("GET","../php/ShowShoppingCarClient.php");
request.send();
//监视readyState的值的变化
request.onreadystatechange=function(){
    if(request.readyState===4){
        if(request.status===200){
            var data=JSON.parse(request.responseText);
            //如果该用户的购物车是空的
            if(data.result=="0"){
                document.getElementById("emptyArea").style.display="block";
                document.getElementById("showShoppingCar").style.display="none";
            }
            //如果该用户的购物车有内容
            if(data.result=="1"){
                document.getElementById("emptyArea").style.display="none";
                document.getElementById("showShoppingCar").style.display="block";
            }
            for(var i=0;i<data.shoppingcar.length;i++){
                $("<tr><td class='td1'><img src='"+data.shoppingcar[i].pic+"'></td><td class='td2'>"+data.shoppingcar[i].description+"</td><td class='td3'>"+data.shoppingcar[i].sellprice+"</td><td class='td4'>"+data.shoppingcar[i].productcount+"</td></tr>").insertAfter("tr:last-child");
            }

        }else{
            alert("发生错误");
        }
    }
}
