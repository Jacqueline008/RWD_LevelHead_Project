var request=new XMLHttpRequest();
request.open("GET","../php/PaymentClient.php");
request.send();
//监视readyState的值的变化
request.onreadystatechange=function(){
    if(request.readyState===4){
        if(request.status===200){
            var data=JSON.parse(request.responseText);
            //订单信息
            document.getElementsByClassName("OrderID")[0].innerHTML=data.OrderID;
            document.getElementsByClassName("Pic")[0].src=data.Pic;
            document.getElementsByClassName("Description")[0].innerHTML=data.Description;
            document.getElementsByClassName("SellPrice")[0].innerHTML=data.SellPrice;
            document.getElementsByClassName("productCount")[0].innerHTML=data.productCount;
            document.getElementsByClassName("sum")[0].innerHTML=data.SellPrice*data.productCount;
            //用户信息
            document.getElementsByClassName("address")[0].innerHTML=data.address;
            document.getElementsByClassName("name")[0].innerHTML=data.name;
            document.getElementsByClassName("tel")[0].innerHTML=data.tel;
        }else{
            alert("发生错误");
        }
    }
}