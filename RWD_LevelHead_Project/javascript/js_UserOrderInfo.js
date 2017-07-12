//直接请求UserOrderInfoClient.php
//创建一个xhr对象
var request=new XMLHttpRequest();
request.open("GET","../php/UserOrderInfoClient.php");
request.send();
//监视readyState的值的变化
request.onreadystatechange=function(){
    if(request.readyState===4){
        if(request.status===200){
            var data=JSON.parse(request.responseText);
            //如果该用户没有订单记录
            if(data.result=="0"){
                document.getElementById("noOrderArea").style.display="block";
                document.getElementById("showOrderArea").style.display="none";
            }
            //如果该用户有订单记录
            if(data.result=="1"){
                document.getElementById("noOrderArea").style.display="none";
                document.getElementById("showOrderArea").style.display="block";
            }
            //
            for(var i=0;i<data.order.length;i++){
                $('<tr><td class="OrderID">'+data.order[i].OrderID+'</td><td class="havePic"><img class="Pic" src="'+data.order[i].Pic+'"></td><td class="Description">'+data.order[i].Description+'</td><td class="SellPrice">'+data.order[i].SellPrice+'</td><td class="productCount">'+data.order[i].productCount+'</td><td class="sum">'+data.order[i].SellPrice*data.order[i].productCount+'</td></tr>').insertAfter("tr:last-child");
            }
        }else{
            alert("发生错误");
        }
    }
}